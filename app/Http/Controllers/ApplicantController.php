<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Applicant;

use App\Mail\JobApplied;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ApplicantController extends Controller
{
    public function store(Request $request, Job $job): RedirectResponse
    {
        $existingApplication = Applicant::where('job_id', $job->id)
            ->where('user_id', auth()->id())
            ->exists();

        if ($existingApplication) {
            return redirect()->back()->with('status', 'You have already applied to this job.');
        }

        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'contact_phone' => 'string',
            'contact_email' => 'required|string|email',
            'message' => 'string',
            'location' => 'string',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        }

        $application = new Applicant($validatedData);
        $application->job_id = $job->id;
        $application->user_id = auth()->id();
        $application->save();

        Mail::to($job->user->email)->send(new JobApplied($application, $job));

        return redirect()->back()->with('success', 'Your application has been submitted.');
    }

    public function show(Request $request): View
    {
        $user = Auth::user();

        $jobs = Job::where('user_id', $user->id)->with('applicants')->get();

        return view('dashboard.index', compact('user', 'jobs'));
    }

    public function destroy($id): RedirectResponse
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();
        return redirect()->route('dashboard.index')->with('success', 'Applicant deleted successfully.');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bookmarks = $user->bookmarkedJobs()->paginate(9);

        return view('jobs.bookmarked')->with('bookmarks', $bookmarks);
    }

    public function store(Job $job): RedirectResponse
    {
        $user = Auth::user();

        if ($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('status', 'Job is already bookmarked.');
        }

        $user->bookmarkedJobs()->attach($job->id);

        return back()->with('status', 'Job bookmarked successfully.');
    }

    public function destroy(Job $job): RedirectResponse
    {
        $user = Auth::user();

        if (!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is not bookmarked.');
        }

        $user->bookmarkedJobs()->detach($job->id);

        return back()->with('status', 'Job removed from bookmarks successfully.');
    }
}

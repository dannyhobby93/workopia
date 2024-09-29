<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->take(6)->get();

        return view('pages.home')->with('jobs', $jobs);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobRequest;

class OngoingJobs extends Controller
{
    public function Jobs() {
    // Get the authenticated user (employer)
    $employer = auth()->user();

    // Get the job requests with status = true (accepted requests) for the authenticated employer
    $ongoingJobs = JobRequest::where('joblist_id', $employer->id)
                            ->where('status', true)
                            ->with('joblist') 
                            ->get();
        return view ('Employer.Ongoing', compact('ongoingJobs'));
    }

}

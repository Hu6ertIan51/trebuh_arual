<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobrequest;
use App\Models\Joblist;

class acceptedJobsController extends Controller
{
   
public function WorkerJobs() {
    // Get the authenticated user (employer)
    $worker = auth()->user();

    // Get the job requests with status = true (accepted requests) for the authenticated employer
    $WongoingJobs = JobRequest::where('user_id', $worker->id)
                            ->where('status', true)
                            ->with('joblist') 
                            ->get();
        return view ('Worker.workerRequests', compact('WongoingJobs'));
    }
}

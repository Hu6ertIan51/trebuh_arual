<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobrequest;
use App\Models\Joblist;

class acceptedJobsController extends Controller
{
    //
    public function show()
    {
        $jobrequest = Jobrequest::where('user_id', auth()->id())->first();
        $status = $jobrequest ? $jobrequest->status : 0;
        $job = null;
        $otherJobs = [];

        if ($status == 1) {
            $job = Joblist::findOrFail($jobrequest->joblist_id);
            $otherJobs = Joblist::where('id', '!=', $job->id)->limit(5)->get(); // Example: Fetching 5 other available jobs
        }

        return view('accepted-jobs', compact('status', 'job', 'otherJobs'));
    }
}

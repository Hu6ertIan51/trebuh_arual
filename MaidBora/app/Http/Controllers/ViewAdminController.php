<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Joblist;
use App\Models\JobRequest;

class ViewAdminController extends Controller
{
    public function viewUsers() {
        $users = User::all();
        return view ('Admin.ViewUsers', compact('users'));
    }

    public function viewMain(){
        return view ('Admin.ViewJobsMain');
    }

    public function viewListings(){
        $jobListings = Joblist::with('user')->get();
        return view('Admin.Listings', compact('jobListings'));
    }

    public function viewJobRequests(){
        $jobRequests = JobRequest::with('user')->get();
        return view('Admin.Requests', compact('jobRequests'));
    }

    public function viewOngoing(){
        $ongoingJobRequests = JobRequest::with(['user', 'joblist'])
        ->where('status', '1')
        ->get();

    return view('Admin.Ongoing', compact('ongoingJobRequests'));
    }
}

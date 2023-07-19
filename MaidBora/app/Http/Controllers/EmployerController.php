<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Employer;
use App\Models\JobRequest;

class EmployerController extends Controller
{
    public function saveEmployer(Request $request){
        $request->validate([
            'housetype' => 'required',
            'bathroomNo' => 'required',
            'bedroomNo' => 'required',
            ]);

    
    $user = Auth::user();

    // Check if the user already has employer details
    $employer = $user->employer;
        
    // If employer details don't exist, create a new instance
    if (!$employer) {
        $employer = new Employer();
    }

    $employer->user_id = $user->id; 
    $employer ->housetype = $request->housetype ;
    $employer->bathroomNo = $request->bathroomNo;
    $employer->bedroomNo = $request->bedroomNo;

    // Flash a success message to the session
    Session::flash('success', 'Employer details have been saved successfully!');

    $employer->save();
    return redirect (route('emprofile'));
    }

    public function viewRequests(){
        $employerId = auth()->user()->id;
        // Fetch job requests for the logged-in employer
        $jobrequests = JobRequest::where('joblist_id', $employerId)
                                ->with('joblist')
                                ->get();
        // $jobrequests = $employerId->joblists->pluck('jobrequests')->flatten();
        // $jobrequests = $employerId->jobrequests;
        
        return view('Employer.EmpRequests', compact('jobrequests'));
    }

    public function RequestController(){

    }


}

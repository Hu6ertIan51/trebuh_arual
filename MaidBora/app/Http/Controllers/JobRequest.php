<?php

namespace App\Http\Controllers;
use App\Models\Joblist;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobRequest extends Controller
{
    public function sendRequest( Joblist $joblist, Request $request)
    {
    // Check if the user has already sent a request for this job listing
    $existingRequest = \DB::table('jobrequest')
    ->where('user_id', Auth::id())
    ->where('joblist_id', $joblist->jobID)
    ->first();

    if ($existingRequest) {
        Session::flash('success', 'Request already sent please wait for aceptance');
        return redirect (route('worker'));
    }
       
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'joblist_id' => 'required|exists:job_post,jobID', 
        ]);

        $requestData = [
            'user_id' => Auth::id(),
            'joblist_id' => $joblist->jobID,
        ];

        // Save the request data in the jobrequest table
        \DB::table('jobrequest')->insert($requestData);

        // return response()->json(['message' => 'Request sent successfully']);
        Session::flash('success', 'Request sent successfully');
        return redirect (route('worker'));
        
    }

    public function Jobrequestview(){
        return view ('JobRequest');
    }

}

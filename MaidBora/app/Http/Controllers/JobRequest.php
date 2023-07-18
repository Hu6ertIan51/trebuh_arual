<?php

namespace App\Http\Controllers;
use App\Models\Joblist;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobRequest extends Controller
{
    public function sendRequest( Joblist $joblist, Request $request)
    {
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

        return response()->json(['message' => 'Request sent successfully']);
        
    }

    public function Jobrequestview(){
        return view ('JobRequest');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\JobRequest;
use App\Models\Joblist;
use Illuminate\Http\Request;

class AcceptRequest extends Controller
{
    public function acceptRequest(JobRequest $jobrequest){
    
        $jobrequest->update(['status'=>true]);

        return redirect(route('ongoingEmp'));
    }
}

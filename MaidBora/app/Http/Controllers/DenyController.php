<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobRequest;

class DenyController extends Controller
{
    public function denyRequest(JobRequest $jobRequest)
{
    // Update the status of the job request to denied (false)
    $jobRequest->update(['status' => false]);

    // Optionally, you can add additional logic here, such as sending notifications to the worker.
    return redirect(route('empwork'));

}
}

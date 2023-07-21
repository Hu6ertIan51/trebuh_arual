<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\User;
use App\Models\Joblist;
use App\Models\JobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class ratingsController extends Controller
{ public function Rate(){
    return view ('Components.RateForm');// we need design a page for sign_up
}

public function rateUser(Request $request)
{   

$request->validate([
    'ratedUser' => 'required|exists:users,id',
    'rating' => 'required|numeric|min:1|max:5',
    'review' => 'nullable|string|max:255',
]);

$raterID = Auth::id();


// Checks if the rater is the same as the ratedUser (user can't rate themselves)
$jobRequest = JobRequest::findOrFail($request->input('ratedUser'));

if ($raterID === $jobRequest->user_id) {
    Session::flash('success', 'Rating unsuccessful, you cant rate yourself');
    return redirect(route('empwork'));
}

// Checks if the rater has already rated the user (user can only rate once)
$existingRating = Rating::where('RaterId', $raterID)
->where('RatedUser', $jobRequest->user_id)
->where('joblist_id', $jobRequest->joblist_id)
->first();

if ($existingRating) {
Session::flash('success', 'You have already rated this user');
return redirect(route('empwork'));
}

// Create and save the new rating
$rating = new Rating();
$rating->RaterId = $raterID;
$rating->RatedUser = $jobRequest->user_id;
$rating->joblist_id = $jobRequest->joblist_id;
$rating->rating = $request->input('rating');
$rating->review = $request->input('review');
$rating->save();


Session::flash('success', 'Rating successful');
return redirect(route('empwork'));
}

    
}
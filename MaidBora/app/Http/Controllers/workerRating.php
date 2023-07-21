<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Rating;
use App\Models\User;
use App\Models\Joblist;
use App\Models\JobRequest;

class workerRating extends Controller
{
    
    public function RateWorker(){
        return view ('Components.WorkerRate');// we need design a page for sign_up
    }

    public function rateEmployer(Request $request)
{   
    // Validate the incoming request data
    $request->validate([
        'ratedUser' => 'required|exists:users,id',
        'rating' => 'required|numeric|min:1|max:5',
        'review' => 'nullable|string|max:255',
    ]);

    $raterID = Auth::id();

        // Checks if the rater is the same as the ratedUser (user can't rate themselves)
        if ($raterID === $request->input('ratedUser')) {
            Session::flash('success', 'Cannot rate yourself');
            return redirect(route('WorkerProfile'));
        }

        // Checks if the rater has already rated the employer for the same job
        $jobRequest = JobRequest::where('user_id', $raterID)
            ->where('joblist_id', $request->input('ratedUser'))
            ->where('status', true)
            ->first();

        if (!$jobRequest) {
            Session::flash('success', 'Can only rate one employer');
            return redirect(route('WorkerProfile'));
        }

        $existingRating = Rating::where('RaterId', $raterID)
            ->where('RatedUser', $request->input('ratedUser'))
            ->where('joblist_id', $jobRequest->joblist_id)
            ->first();

        if ($existingRating) {
            Session::flash('success', 'Already rated this user');
            return redirect(route('WorkerProfile'));
        }

        // Create and save the new rating
        $rating = new Rating();
        $rating->RaterId = $raterID;
        $rating->RatedUser = $request->input('ratedUser');
        $rating->joblist_id = $jobRequest->joblist_id;
        $rating->rating = $request->input('rating');
        $rating->review = $request->input('review');
        $rating->save();

        Session::flash('success', 'Rating successful');
        return redirect(route('WorkerProfile'));
}
}

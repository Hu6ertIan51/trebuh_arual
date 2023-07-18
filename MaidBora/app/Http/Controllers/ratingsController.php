<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;



class ratingsController extends Controller
{
    //
    public function workerRateEmp(){
        return view ('Worker.WorkerRateForm');// we need design a page for sign_up
    }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'RaterID' => 'required',
        'Review' => 'required',
        'Rating' => 'required|integer|min:1|max:5',
        'RatedUserId' => 'required',
        'JobId' => 'required',
    ]);

    // Save the new rating
    $rating = Rating::create($validatedData);

    // Calculate the new average rating for the rated user
    $averageRating = Rating::where('RatedUserId', $request->input('RatedUserId'))->avg('Rating');

    // Update the average rating in the users table for the rated user
    DB::table("users")
        ->where("id", $request->input("RatedUserId"))
        ->update(["average_rating" => $averageRating]);

    return redirect()->back()->with("success", "Rating submitted successfully.");
}

}
    

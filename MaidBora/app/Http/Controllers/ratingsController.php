<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;



class ratingsController extends Controller
{
    //
    public function showRatingForm(Joblist $job)
    {
        return view('rating-form', compact('job'));
    }
    

}
    

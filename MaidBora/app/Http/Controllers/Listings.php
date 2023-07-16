<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Listings extends Controller
{
    public function PostListing(){
        return view ('Employer.Listing');
    }
}

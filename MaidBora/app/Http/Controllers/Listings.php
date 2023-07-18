<?php

namespace App\Http\Controllers;
use App\Models\Joblist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class Listings extends Controller
{
    public function PostListing(){
        return view ('Employer.Listing');
    }

    public function createListing(Request $request){

        $this->middleware('auth');

        $request->validate([
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'jobCategory' => 'required',
            'salary' => 'required',
            'employmentType' => 'required',
        ]);

        $job = new Joblist();
        $job ->jobTitle = $request->jobTitle ;
        $job->jobDescription = $request->jobDescription;
        $job->jobCategory = $request->jobCategory;
        $job->salary = $request->salary;
        $job->employmentType = $request->employmentType;

        $job->user_id = Auth::id();

        $job->save();

        Session::flash('success', 'Job listing created successfully!');
        return redirect()->route('emprofile');
    }
}

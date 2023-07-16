<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employer;

class dashboard extends Controller
{
    public function dash(){
        
        return view ('Components.admin');

    }
    public function emp(){
        $userID = Auth::user() -> id ;
        $user = User::find($userID);
        return view('Employer.Empdash', compact('user'));
    }

    public function showProfile(){
        $userID = Auth::user() -> id ;
        $user = User::find($userID);
        return view('Employer.Emprofile', compact('user'));
    }

    public function worker(){
        return view ('Worker.worker');
    }

    
}

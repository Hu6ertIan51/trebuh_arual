<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class dashboard extends Controller
{
    public function dash(){
        
        return view ('Components.admin');

    }
    public function emp(){
        return view ('Employer.Empdash'); 
    }

    public function empProfile(){
        return view ('Employer.Emprofile');
        $user = User::find($userID);

    }

    public function worker(){
        return view ('Worker.worker');
        $user = User::find($userID);
    }

    public function workerFunc(){
        $userID = Auth::user() -> id ;
        $user = User::find($userID);
        return view('Worker.worker', compact('user'));
    }
}

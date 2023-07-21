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
        $user = User::find($userID);
    }

    public function workerFunc(){
        $userID = Auth::user() -> id ;
        $user = User::find($userID);
        return view('Worker.worker', compact('user'));
    }

    public function admin(){
        $adminName = Auth::user()->id;
        $user = User::find($adminName);
        return view('Components.admin', compact('user'));
    }

    public function workerF(){
        $userID = Auth::user() -> id ;
        $user = User::find($userID);
        return view('Worker.WorkerProfile', compact('user'));
    }
}

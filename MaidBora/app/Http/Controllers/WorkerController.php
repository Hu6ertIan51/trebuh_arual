<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;


class WorkerController extends Controller
{
    public function AuthRegister(){
        return view ('Worker.SignUp');// we need design a page for sign_up
    }
    
    public function login(){
        return view ('signin');
    }
    
    public function dashboard(){ //1st page
        return view ('template');
    }

    public function profile(){ //shows worker profile
        return view ('worker.profile');
    }

    public function settings(){
        return view ('worker.Settings');
    }

}

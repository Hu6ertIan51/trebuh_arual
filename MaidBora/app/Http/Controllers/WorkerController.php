<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;


class WorkerController extends Controller
{
    
    public function login(){
        return view ('signin');
    }
    
    public function dashboard(){ //1st page
        return view ('Worker.WorkerDashboard');
    }

    public function SignUp(){
        return view('Worker.WorkerDetails');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dash(){
        
        return view ('Components.admin');

    }
    public function emp(){
        return view ('Employer.employer');
    }

    public function worker(){
        return view ('Worker.worker');
    }
}

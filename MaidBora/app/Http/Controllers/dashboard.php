<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    public function worker(){
        return view ('Worker.worker');
    }
}

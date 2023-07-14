<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dash(){
        
        return view ('Components.admin');

    }
}

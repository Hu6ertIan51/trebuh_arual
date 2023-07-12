<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if ($role=='1'){
            return view('admin');
        }
        if ($role=='2'){
            return view('employer');
        }
        if ($role=='0'){
            return view('worker');
        }
        
    }
}

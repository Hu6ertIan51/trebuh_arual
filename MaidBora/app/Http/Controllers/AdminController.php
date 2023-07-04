<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function AdminDasboard(){
        return view ('admin');
    }

    public function Login(){
        return view ('signin');
    }
}

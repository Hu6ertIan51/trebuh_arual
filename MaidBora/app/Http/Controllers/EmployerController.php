<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employer;

class EmployerController extends Controller
{
    //Returns teh view for login for employer
    public function Login(){
        return view ('signin');
    }

    public function Dashboard(){
        return view ('Employer.Employer');
    }
}

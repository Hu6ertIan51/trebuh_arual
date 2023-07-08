<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function AuthRegister(){
        return view ('signup');// we need design a page for sign_up
    }
    
    public function SignIn(){
        return view ('signin');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserSignUp extends Controller
{
    public function AuthRegister(){
        return view ('signup');// we need design a page for sign_up
    }
}

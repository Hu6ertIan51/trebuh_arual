<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login extends Controller
{
    public function LoginPage(){
        return view ('Login.login');
    }

    public function auth (LoginRequest $request){


        $username = $request -> input('username');
        $password = $request -> input('password');

        $credentials = array (
            'username' => $username,
            'password' => $password,
        );

        if (Auth::attempt($credentials)){
            $request -> session () -> regenerate ();
            // get a user's role
            $userrole = Auth::user() -> role ;
            // dd ($userrole);
            if($userrole == User::ADMIN_ROLE){
                return redirect () -> intended (route('dashboard'));
            }elseif($userrole == User::EMPLOYER_ROLE){
                return redirect () -> intended (route('empwork'));
            }elseif($userrole == User::WORKER_ROLE){
                return redirect () -> intended (route('worker'));
            }
            
            // can only access certain pages if they are logged in
        }else{
            return redirect () -> back () -> with ('error', 'invalid credentials');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
}}

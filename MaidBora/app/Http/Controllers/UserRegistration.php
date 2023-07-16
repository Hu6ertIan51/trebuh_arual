<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;

class UserRegistration extends Controller
{
    public function Register(){
        return view ('Components.signup');
    }

    public function createUser(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required','email',
            'county' => 'required',
            'subcounty' => 'required',
            'town' => 'required',
            'password' => 'required', 'confirmed',
            'bio' => 'required',
            'role' => 'required'
            ]);

        $user = new User();
        $user ->firstname = $request->firstname ;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->county = $request->county;
        $user->subcounty = $request->subcounty;
        $user->town = $request->town;
        $user->password = Hash::make($request->password);
        $user->bio = $request->bio;
        $user->role = $request->role;

        $user->save();

        if ($user and $user -> id > 0){
            Session::flash('success', 'Registration successful! Please log in to continue.');
            return redirect (route('login'));
        }
        else{
            return redirect () -> back ();
        }

    }
    
}
/*
            'email' => 'required','email',
            'county' => 'required',
            'subcounty' => 'required',
            'town' => 'required',
            'password' => 'required', 'confirmed',
            'confpassword' => 'required',
            'bio' => 'required',


        $user->email = $request->email;
        $user->county = $request->county;
        $user->subcounty = $request->subcounty;
        $user->town = $request->town;
        $user->password = Hash::make($request->password);
        $user->bio = $request->bio;
*/
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Hash;
use Session;
class UserController extends Controller
{
    public function SignUp(){
        return view ('signup');// we need design a page for sign_up
    }
    
    public function SignIn(){
        return view ('signin');
    }
    
    public function Finish(Request $request){
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'IDNumber' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'town' => 'required',
            'password' => 'required',
            'confpassword' => 'required',
            'bio' => 'required',
        ]);
        $user = new users();
        $user ->firstname = $request->firstname ;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->IDNumber = $request->IDNumber;
        $user->county = $request->county;
        $user->subcounty = $request->subcounty;
        $user->town = $request->town;
        $user->password = Hash::make($request->password);
        $user->confpassword = Hash::make($request->confpassword);
        $user->bio = $request->bio;
        $user->save();
        //return response()->json(['message'=>'Data saved successfully']);
        return redirect()->route('SignIn');
        /*
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'IDnumber' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'town' => 'required',
            'password' => 'required|min:6',
            'confpassword' => 'required|min:6',
        ]);
        $user = new users();
        $user ->firstname = $request->firstname ;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->IDnumber = $request->IDnumber;
        $user->county = $request->county;
        $user->subcounty = $request->subcounty;
        $user->town = $request->town;
        $user->password = $request->password;
        $user->confpassword = $request->confpassword;

        $user->save(); 

        return response()->json(['message'=>'Data saved successfully']);
        */
        echo "please work";
       
    }

    public function Login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = users::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session() -> put('loginId', $user->id);
                return redirect()->route('EmpDash');
            }else{
                return back();
            }
        }else{
            return back();
            
        }

    }

    public function FetchUser(){

        $user = Auth::user();
        return view('test', compact('user'));
    }

    
}

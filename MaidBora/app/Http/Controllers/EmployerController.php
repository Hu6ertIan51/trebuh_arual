<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employer;

class EmployerController extends Controller
{
    //Returns teh view for login for employer
    public function SignUp(){
        return view ('Employer.EmployerDetails');
    }

    public function EmpDetails(Request $request){
        $request->validate([
            'housetype' => 'required',
            'bathroomNo' => 'required',
            'bedroomNo' => 'required',
        ]);
        $details = new employer();
        $details -> housetype = $request->housetype;
        $details -> bathroomNo = $request->bathroomNo;
        $details -> bedroomNo = $request->bedroomNo;

        $details->save();

        //return response()->json(['message' => 'Data saved successfully']);
        return redirect()->route('Finish');
    }
    
    public function Login(){
        return view ('signin');
    }

    public function Dashboard(){
        return view ('Employer.Employer');
    }
}

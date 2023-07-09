<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;


class WorkerController extends Controller
{
    
    public function login(){
        return view ('signin');
    }
    
    public function dashboard(){ //1st page
        return view ('Worker.WorkerDashboard');
    }

    public function SignUp(){
        return view('Worker.WorkerDetails');
    }

    public function adddetails(Request $request){
        $request->validate([
            'YearsExperienced' => ' required',
            'WorkType' => 'required',
            'WorkingHours' => 'required',
            'Expectedsalary' => 'required',
        ]);
        $worker = new worker();
        $worker -> YearsExperienced = $request->YearsExperienced;
        $worker -> WorkType = $request->WorkType;
        $worker -> WorkingHours = $request->WorkingHours;
        $worker -> Expectedsalary = $request->Expectedsalary;

        $worker->save();
        //return response()->json(['message' => 'Data saved successfully']);
        return redirect()->route('Finish');
    }
}

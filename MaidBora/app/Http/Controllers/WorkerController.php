<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;

use Illuminate\Http\Request as HttpRequest;




class WorkerController extends Controller
{
   
    public function AuthRegister(){
        return view ('Worker.SignUp');// we need design a page for sign_up
    }
    
    public function login(){
        return view ('signin');
    }
    
    public function dashboard(){ //1st page
        return view ('Worker.WorkerDashboard');
    }


    public function SignUp(){
        return view('Worker.WorkerDetails');
    }

    public function WorkProfile(){
        return view('Worker.worker');
    }
    //to get to the worker settings page
    function worker_settings(){
        return view('Worker.WorkerSettings');
    }
    //to get to the job listings that the worker can view
    function job_listings(){
        return view('Worker.JobListings');
    }

    function job_requests(){
        return view('Worker.workerRequests');
    }
   
   
    //function to fetch data from db and show on profile page
    function showProfile(){
        $user = auth()->user(); 
        $userData = User::find($user->id);
        return view('Worker.worker', compact('user'));

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
    

    /*public function add(){
        $data=new worker();
        $data::all();
        return view();*/
    }
}

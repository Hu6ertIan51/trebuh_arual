<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
use App\Models\Joblist;
use Illuminate\Http\Request as HttpRequest;
use App\Models\User;





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
    
    //function for view profile 
    public function showWorkerProfile(User $id)
    {
        $worker = User::findOrFail($id);

        return view('Worker.WorkerProfile',['worker' => $worker]);
    }

   
    //function to store users ratings, update average rating and redirect to homepage
    
    public function SignUp(){
        return view('Worker.WorkerDetails');
    }

    //function to show the worker's profile
    public function WorkProfile(){
        return view('Worker.worker');
    }

    //function to get to the workers requests and their status 
    

    public function job_listings()
    {
        $jobPosts = Joblist::all();
        return view('Worker.JobListings', compact('jobPosts'));
    }
   
    //function to show ongoing jobs in the worker profile
    public function showOngoingJobs()
    {
        // Get the accepted job requests
        $jobs = Job::where('userId', auth()->user()->id)
            ->where('status', 'accepted')
            ->get();

        return view('ongoing_jobs', ['jobs' => $jobs]);
    }

    //function to fetch data from db and show on profile page
    function showProfile(){
        $user = auth()->user(); 
        $userData = User::find($user->id);
        return view('Worker.worker', compact('user'));

    }
    public function requestJob(Request $request)
{
 
    $jobId = $request->input('jobID');
    $workerProfileLink = $request->input('worker_profile_link');

    // Perform the necessary actions, such as storing the job request in the database

    return response()->json(['message' => 'Job request successful']);
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

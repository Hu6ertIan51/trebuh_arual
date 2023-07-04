<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;


class WorkerController extends Controller
{
    //show all workers
    public function all(){
        //call the worker model
        //$allWorkers = worker::all();
        //dd($allWorkers); - to show the output of workers  'dump and die'
        //echo "<h1>WITHIN THE ALL METHOD BABY!</h1>";

        //pass this data to the view file
    
    }

    //show one worker
    public function one(){}

    //add a worker
    public function add(){
        echo "within the add method";
    }

    //save 
    public function save(){}

    //edit 
    public function edit(){}

    //save edits
    public function saveChanges(){}

    //delete
    public function delete(){}

    public function profile(){
        return view ('profile');
    }
    public function dashboard(){
        return view ('dashboard');
    }

}

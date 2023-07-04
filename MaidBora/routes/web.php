<?php

use Illuminate\Support\Facades\Route;
use App\Models\worker;
use App\Http\Controllers\WorkerController;
//everytime we include a model in our code, specify that we're using it in the namespace

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//get or post symbolize the method that the route will use
Route::get('/', function () {
    return view('template');
});


//roleController->all()

//defining a route 
//route::method('routeName/functionName',[nameController::class,'method']);
Route::get('worker/profile',[WorkerController::class,'profile']);
Route::get('worker/all',[WorkerController::class,'all']); 
Route::get('worker/add',[WorkerController::class,'add']);


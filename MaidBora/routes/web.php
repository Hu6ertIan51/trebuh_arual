<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\worker;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;
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
    return view('signin');
});


//roleController->all()

//defining a route 
//route::method('routeName/functionName',[nameController::class,'method']);
Route::get('Worker/profile',[WorkerController::class,'profile']);
Route::get('Worker/login',[WorkerController::class,'login']); 
Route::get('Worker/dashboard',[WorkerController::class,'dashboard']);
Route::get('Worker/profile',[WorkerController::class,'profile']);
Route::get('Worker/settings',[WorkerController::class,'settings']);
Route::get('Worker/SignUp',[WorkerController::class,'AuthRegister']);


//EmployerControllerRoutes
Route::get('Employer/login',[EmployerController::class, 'login']);
Route::get('Employer/dashboard', [EmployerController::class, 'Dashboard']);
Route::get('Employer/SignUp',[EmployerController::class,'SignUp']);

//AdminControllers
Route::get('Admin/dashboard', [AdminController::class, 'AdminDasboard']);
Route::get('Admin/login',[AdminController::class, 'Login']);

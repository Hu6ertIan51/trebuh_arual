<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\worker;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

//WorkerController routes
Route::get('Worker/SignUp',[WorkerController::class,'SignUp']);
Route::get('Worker/dashboard',[WorkerController::class,'dashboard']);

//EmployerControllerRoutes
Route::get('Employer/SignUp',[EmployerController::class,'SignUp']);
Route::get('Employer/dashboard', [EmployerController::class, 'Dashboard']);

//AdminControllers
Route::get('Admin/dashboard', [AdminController::class, 'AdminDasboard']);

//UserController
Route::get('User/SignUp', [UserController::class, 'AuthRegister']);
Route::get('User/SignIn', [UserController::class, 'SignIn']);

<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\worker;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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

Route::get('/Enrol', function () {
    return view('Enrol');
});

//roleController->all()

//defining a route 
//route::method('routeName/functionName',[nameController::class,'method']);

//WorkerController routes
Route::get('Worker/SignUp',[WorkerController::class,'SignUp']);
Route::get('Worker/SignUp',[WorkerController::class,'SignUp'])->name('WorkerDetails');
Route::get('Worker/dashboard',[WorkerController::class,'dashboard']);
Route::post('/DetailsWorker', [WorkerController::class, 'adddetails'])->name('WorkDetails');

//EmployerControllerRoutes
Route::get('Employer/SignUp',[EmployerController::class,'SignUp']);
Route::post('Employer/SignUp',[EmployerController::class,'SignUp'])->name('Employerdetails');
Route::get('Employer/dashboard', [EmployerController::class, 'Dashboard'])->name('EmpDash');
Route::post('/DetailsEmp', [EmployerController::class, 'EmpDetails'])->name('EmpSave');

//AdminControllers
Route::get('Admin/dashboard', [AdminController::class, 'AdminDasboard']);

//UserController
Route::get('User/SignUp', [UserController::class, 'SignUp'])->name('Finish');
Route::post('User/SignUp', [UserController::class, 'SignUp'])->name('Finish');
Route::get('User/SignIn', [UserController::class, 'SignIn']);
Route::post('User/SignIn', [UserController::class, 'SignIn'])->name('SignIn');
Route::post('/RegisterUser', [UserController::class, 'Finish'])->name('RegisterUser');
Route::post('/LoginUser',[UserController::class, 'Login'])->name('Login');

//RoleController
Route::post('/SaveRole', [RoleController::class, 'addRole'])->name('SaveRole');
Route::post('/Enrol', [RoleController::class, 'Enrol'])->name('Error');

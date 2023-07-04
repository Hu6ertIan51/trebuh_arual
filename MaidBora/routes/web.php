<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('signin');
});

//EmployerControllerRoutes
Route::get('Employer/login',[EmployerController::class, 'login']);
Route::get('Employer/dashboard', [EmployerController::class, 'Dashboard']);

//AdminControllers
Route::get('Admin/dashboard', [AdminController::class, 'AdminDasboard']);
Route::get('Admin/login',[AdminController::class, 'Login']);

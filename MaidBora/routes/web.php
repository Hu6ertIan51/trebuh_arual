<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Listings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 Route::get('/', function () {
    return view('Login.login'); 
});

Route::get('/login', [Login::class, 'LoginPage'])->name('login');
Route::post('/login', [Login::class, 'auth'])->name('authenticate');
Route::get('/UserReg', [UserRegistration::class,'Register']);
Route::post('/UserReg', [UserRegistration::class,'createUser'])->name('registerUser');
Route::get('/employer', [dashboard::class, 'emp'])->name('empwork');
Route::get('/worker', [dashboard::class, 'worker'])->name('worker');
Route::get('/profile', [dashboard::class, 'showProfile'])->name('emprofile');

Route::post('/saveEmployer', [EmployerController::class,'saveEmployer'])->name('savemployer');
Route::get('/Empdetails', [dashboard::class, 'showDetails'])->name('empdetails');
Route::Get('/Listing', [Listings::class, 'PostListing'])->name('listings');



Route::post('/saveEmployer', [EmployerController::class,'saveEmployer'])->name('savemployer');
Route::get('/Empdetails', [dashboard::class, 'showDetails'])->name('empdetails');

//worker routes 
Route::get('Worker/WorkProfile',[dashboard::class,'workerFunc'])->name('worker');
Route::post('/DetailsWorker', [WorkerController::class, 'adddetails'])->name('WorkDetails');
Route::get('Worker/worker_settings',[WorkerController::class,'worker_settings'])->name('WorkerSettings');
Route::get('Worker/job_listings',[WorkerController::class,'job_listings'])->name('JobListings');
Route::get('Worker/JobReqs',[WorkerController::class,'job_requests'])->name('workerRequests');
// Route::get('Worker/ApplicationForm', [dashboard::class, 'empProfile'])->name('emprofile');
Route::get('/UserReg', [UserRegistration::class,'Register']);
//Route::get('/showProfile', [dashboard::class,'workerFunc']);



Route::middleware(['auth']) -> group (function(){
Route::get('/dashboard',[dashboard::class, 'dash'])->name('dashboard');
Route::get('/logout',[Login::class, 'logout'])->name('logout');

});

/*
<select>
<option> Please select role</option>
	<option value="2"> Employer</option>
	<option value="3"> Worker</option>
</select>
*/
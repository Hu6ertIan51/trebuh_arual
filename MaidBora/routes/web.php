<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Listings;
use App\Http\Controllers\JobRequest;
use App\Http\Controllers\AcceptRequest;
use App\Http\Controllers\OngoingJobs;
use App\Http\Controllers\DenyController;
use App\Http\Controllers\ratingsController;
use App\Http\Controllers\acceptedJobsController;
use App\Http\Controllers\workerRating;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ViewAdminController;
use App\Http\Controllers\AdminDel;

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
Route::get('/profile', [dashboard::class, 'empProfile'])->name('emprofile');
Route::get('/profile', [dashboard::class, 'showProfile'])->name('emprofile');

Route::post('/saveEmployer', [EmployerController::class,'saveEmployer'])->name('savemployer');
Route::get('/Empdetails', [dashboard::class, 'showDetails'])->name('empdetails');
Route::get('/Listing', [Listings::class, 'PostListing'])->name('listings');
Route::post('/JobPosted', [Listings::class, 'createListing'])->name('jobcreated')->middleware('auth');
Route::post('/saveEmployer', [EmployerController::class,'saveEmployer'])->name('savemployer');
Route::get('/Empdetails', [dashboard::class, 'showDetails'])->name('empdetails');

//worker routes 
Route::get('Worker/WorkProfile',[dashboard::class,'workerFunc'])->name('worker');
Route::post('/DetailsWorker', [WorkerController::class, 'adddetails'])->name('WorkDetails');
Route::get('Worker/worker_settings',[WorkerController::class,'worker_settings'])->name('WorkerSettings');
Route::get('Worker/job_listings',[WorkerController::class,'job_listings'])->name('JobListings');
Route::get('/viewWorkerProfile', [dashboard::class, 'workerF'])->name('WorkerProfile');




//Route::get('Worker/ApplicationForm', [dashboard::class, 'empProfile'])->name('emprofile');
Route::get('/UserReg', [UserRegistration::class,'Register']);
Route::post('/sendRequest', [WorkerController::class, 'requestJob']);



//fetching status of request in order to display in the ongoing jobs
Route::get('/accepted-jobs', [AcceptedJobsController::class, 'show'])->name('accepted-jobs');

//rating routes 
Route::get('/RateForm', [ratingsController::class, 'Rate'])->name('WorkerRateForm');
Route::post('/RateUser', [ratingsController::class, 'rateUser'])->name('rateuser');
Route::get('/RateWorker', [workerRating::class, 'RateWorker'])->name('WorkerRateform');
Route::post('/RateEmployer', [workerRating::class, 'RateEmployer'])->name('ratemployer');




//Job Requests
Route::post('/jobRequest/{joblist}/send-request', [JobRequest::class, 'sendRequest'])->name('joblistings.request');
Route::get('/JobRequests', [JobRequest::class, 'Jobrequestview']);
Route::get('/EmployerRequests', [EmployerController::class, 'viewRequests']);
Route::post('/AcceptRequest/{jobrequest}/accept',[AcceptRequest::class, 'acceptRequest'])->name('acceptrequest');
Route::post('/DenyRequest/{jobRequest}', [DenyController::class, 'denyRequest'])
     ->name('denyRequest');
//Ongoing Jobs
Route::get('/OngoingJobs', [OngoingJobs::class, 'Jobs'])->name('ongoingEmp');
Route::get('/WorkerOngoingJobs', [acceptedJobsController::class, 'WorkerJobs'])->name('workerRequests');

//Admin
Route::get('/addUser', [Admin::class, 'createUserButton'])->name('addUserAdmin');
Route::post('/postUser' , [Admin::class, 'AdminCreate'])->name('createUserAdmin');
Route::get('/viewUsers', [ViewAdminController::class, 'viewUsers'])->name('viewUsers');
Route::get('/ViewJobsMain', [ViewAdminController::class, 'viewMain'])->name('JobsMain');
Route::get('/viewListings', [ViewAdminController::class, 'viewListings'])->name('viewJobListings');
Route::get('/viewJobRequests', [ViewAdminController::class, 'viewJobRequests'])->name('viewJobRequests');
Route::get('/viewOngoingJobs', [ViewAdminController::class, 'viewOngoing'])->name('viewOngoingJobs');
Route::delete('/deleteUser/{id}', [AdminDel::class, 'deleteUser'])->name('deleteUser');


Route::get('/dashboard',[dashboard::class, 'admin'])->name('dashboard');
Route::get('/logout',[Login::class, 'logout'])->name('logout');

/*
<select>
<option> Please select role</option>
	<option value="2"> Employer</option>
	<option value="3"> Worker</option>
</select>
*/
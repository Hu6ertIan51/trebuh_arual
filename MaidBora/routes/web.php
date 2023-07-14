<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\dashboard;

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
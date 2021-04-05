<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParticipantsController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Home page
Route::view('/', 'welcome')->name('welcome');
Route::view('/', 'home')->name('home');

//signup page
Route::view('/signup', 'signup')->name('signup');
Route::post('/signup', [ParticipantsController::class, 'register'])->name('signup.store');
Route::view('/signup/successful', 'signupsuccessful')->name('signupsuccessful');

//status page
Route::view('/status', 'status')->name('status');

//admin page

// Normal routes
Route::middleware('auth')->group(function () {

    // Auth routes
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Admin routes
Route::middleware('admin')->group(function () {
    // Admin home
    Route::view('/admin', 'admin.home')->name('admin.home');
});

// Guest routes
Route::middleware('guest')->group(function () {
    // Auth login
    Route::view('/auth/login', 'auth.login')->name('auth.login');
    Route::post('/auth/login', [AuthController::class, 'login']);

    // Auth register
    Route::view('/auth/register', 'auth.register')->name('auth.register');
    Route::post('/auth/register', [AuthController::class, 'register']);
});

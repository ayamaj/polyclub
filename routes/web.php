<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\front\All_clubController;
use App\Http\Controllers\front\All_eventController;
use App\Http\Controllers\front\WelcomeController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', function () {
    return view('auth/register');})->name('register');
Route::get('/verify', function () {
    return view('auth/verify');})->name('verify');

Route::get('/home', [UserController::class, 'index'])->name('index');


// Route::get('/confirm_password', function () {
//     return view('auth/passwords/confirm');})->name('confirm_password');

// Route::get('/email_passwords', function () {
//     return view('auth/passwords/email');})->name('email_passwords');

//  Route::get('/reset_passwords', function () {
//    return view('auth/passwords/reset');})->name('reset_passwords');

Auth::routes();

// welcomes Routes

    Route::get('/', [WelcomeController::class, 'index'])->name('index');

// End welcomes Routes

// all_club Routes
Route::prefix('all_clubs')->as('all_club.')->group(function () {
    Route::get('/', [All_clubController::class, 'index'])->name('index');
});
// all_club Routes

// all_event Routes
Route::prefix('all_events')->as('all_event.')->group(function () {
    Route::get('/', [All_eventController::class, 'index'])->name('index');
});
// all_event Routes





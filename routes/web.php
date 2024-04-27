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



// Route::get('/confirm_password', function () {
//     return view('auth/passwords/confirm');})->name('confirm_password');

// Route::get('/email_passwords', function () {
//     return view('auth/passwords/email');})->name('email_passwords');

//  Route::get('/reset_passwords', function () {
//    return view('auth/passwords/reset');})->name('reset_passwords');

Auth::routes();

// welcomes Routes

    Route::get('/', [WelcomeController::class, 'home'])->name('home');

// End welcomes Routes

// club Routes
Route::get('/clubs', [WelcomeController::class, 'clubs'])->name('clubs');

// event Routes
Route::get('/events', [WelcomeController::class, 'events'])->name('events');

//inscription
Route::get('/inscription', [WelcomeController::class, 'inscription'])->name('inscription');
Route::post('/inscription/store', [WelcomeController::class, 'store'])->name('inscription.store');


// ********
// club Routes
 Route::get('/one_club', [WelcomeController::class, 'one_club'])->name('one_club');

// event Routes
 Route::get('/one_event', [WelcomeController::class, 'one_event'])->name('one_event');




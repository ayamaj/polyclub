<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\All_clubController;
use App\Http\Controllers\admin\All_eventController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ClubController;
use App\Http\Controllers\admin\dashboard_adminController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\WelcomeController;






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

// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/dashboard_admin', function () {
    return view('admin.dashboard_admin.index')->name('dashboard_admin');
});

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\admin\UserController::class, 'index'])->name('index');


// Route::prefix('admin')->group(function () {
    // Users Routes
    Route::prefix('users')->as('user.')->group(function () {
        Route::post('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update', [UserController::class, 'update'])->name('update');
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/search', [UserController::class, 'search'])->name('search');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');

    });
    // End users routes
// });

    //  Permissions Routes
   Route::prefix('permissions')->as('permission.')->group(function () {
       Route::post('/delete/{id}', [PermissionController::class, 'delete'])->name('delete');
       Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('edit');
       Route::post('/update', [PermissionController::class, 'update'])->name('update');
       Route::get('/home', [PermissionController::class, 'index'])->name('index');
       Route::get('/create', [PermissionController::class, 'create'])->name('create');
       Route::post('/store', [PermissionController::class, 'store'])->name('store');
       Route::get('/search', [PermissionController::class, 'search'])->name('search');


   });
// End Permissions Routes

//  Roles Routes
    Route::prefix('roles')->as('role.')->group(function () {
       Route::post('/delete/{id}', [RoleController::class, 'delete'])->name('delete');
       Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
       Route::post('/update', [RoleController::class, 'update'])->name('update');
       Route::get('/', [RoleController::class, 'index'])->name('index');
       Route::get('/create', [RoleController::class, 'create'])->name('create');
       Route::post('/store', [RoleController::class, 'store'])->name('store');
 });
// End Roles Routes

// Clubs Routes
    Route::prefix('clubs')->as('club.')->group(function () {
      Route::post('/delete/{id}', [ClubController::class, 'delete'])->name('delete');
      Route::get('/edit/{id}', [ClubController::class, 'edit'])->name('edit');
      Route::post('/update', [ClubController::class, 'update'])->name('update');
      Route::get('/', [ClubController::class, 'index'])->name('index');
      Route::get('/create', [ClubController::class, 'create'])->name('create');
      Route::post('/store', [ClubController::class, 'store'])->name('store');
});
// End Clubs Routes

// Events Routes
    Route::prefix('events')->as('event.')->group(function () {
      Route::post('/delete/{id}', [EventController::class, 'delete'])->name('delete');
      Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
      Route::post('/update', [EventController::class, 'update'])->name('update');
      Route::get('/', [EventController::class, 'index'])->name('index');
      Route::get('/create', [EventController::class, 'create'])->name('create');
      Route::post('/store', [EventController::class, 'store'])->name('store');

});
// End Events Routes

// dashboard Routes
  Route::prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/', [dashboard_adminController::class, 'index'])->name('index');
});
// End dashboard routes

    // Users Routes
    Route::prefix('admins')->as('admin.')->group(function () {
        Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('/update', [AdminController::class, 'update'])->name('update');
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/store', [AdminController::class, 'store'])->name('store');
    });
    // End users routes

 Route::prefix('forms')->as('form.')->group(function () {
    Route::post('/delete/{id}', [FormController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [FormController::class, 'edit'])->name('edit');
    Route::post('/update', [FormController::class, 'update'])->name('update');
    Route::get('/', [FormController::class, 'index'])->name('index');
    Route::get('/create', [FormController::class, 'create'])->name('create');
    Route::post('/store', [FormController::class, 'store'])->name('store');
    Route::get('/show/{id}', [FormController::class, 'show'])->name('show');
     });

// // welcomes Routes
// Route::prefix('welcomes')->as('welcome.')->group(function () {
//     Route::post('/delete/{id}', [WelcomeController::class, 'delete'])->name('delete');
//     Route::get('/edit/{id}', [WelcomeController::class, 'edit'])->name('edit');
//     Route::post('/update', [WelcomeController::class, 'update'])->name('update');
//     Route::get('/', [WelcomeController::class, 'index'])->name('index');
//     Route::get('/create', [WelcomeController::class, 'create'])->name('create');
//     Route::post('/store', [WelcomeController::class, 'store'])->name('store');
// });
// // End welcomes Routes

// // all_club Routes
// Route::prefix('all_clubs')->as('all_club.')->group(function () {
//     Route::get('/', [All_clubController::class, 'index'])->name('index');
//     Route::post('/store', [All_clubController::class, 'store'])->name('store');
// });
// // all_club Routes

// // all_event Routes
// Route::prefix('all_events')->as('all_event.')->group(function () {
//     Route::get('/', [All_eventController::class, 'index'])->name('index');
//     Route::post('/store', [All_eventController::class, 'store'])->name('store');
// });
// // all_event Routes

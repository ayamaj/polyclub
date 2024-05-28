<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ClubController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ResourceController;
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

// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

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






Route::middleware('auth')->group(function () {
    Auth::routes();
// dashboard Routes
    Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
// End dashboard routes

    // Users Routes
    Route::prefix('users')->as('user.')->group(function () {
        Route::post('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update', [UserController::class, 'update'])->name('update');
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::match(['get', 'post'], '/search', [UserController::class, 'search'])->name('search');
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
       Route::get('/', [PermissionController::class, 'index'])->name('index');
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
      Route::post('/search', [ClubController::class, 'search'])->name('search');
      Route::get('/create', [ClubController::class, 'create'])->name('create');
      Route::post('/store', [ClubController::class, 'store'])->name('store');
      Route::get('/index_one_club/{club}', [ClubController::class, 'index_one_club'])->name('index_one_club');


});
// End Clubs Routes

// Events Routes
    Route::prefix('events')->as('event.')->group(function () {
      Route::post('/delete/{id}', [EventController::class, 'delete'])->name('delete');
      Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
      Route::post('/update', [EventController::class, 'update'])->name('update');
      Route::post('/search', [EventController::class, 'search'])->name('search');
      Route::get('/', [EventController::class, 'index'])->name('index');
      Route::get('/create', [EventController::class, 'create'])->name('create');
      Route::post('/store', [EventController::class, 'store'])->name('store');

});
// End Events Routes





 Route::prefix('forms')->as('form.')->group(function () {
    Route::post('/delete/{id}', [FormController::class, 'delete'])->name('delete');
    Route::get('/edit/{form}', [FormController::class, 'edit'])->name('edit');
    Route::post('/update', [FormController::class, 'update'])->name('update');
    Route::get('/', [FormController::class, 'index'])->name('index');
    Route::post('/search', [FormController::class, 'search'])->name('search');
    Route::post('/store', [FormController::class, 'store'])->name('store');
    Route::get('/show/{id}', [FormController::class, 'show'])->name('show');
     });

     Route::prefix('resources')->as('resource.')->group(function () {
        Route::post('/delete/{id}', [ResourceController::class, 'delete'])->name('delete');
        Route::get('/edit/{id}', [ResourceController::class, 'edit'])->name('edit');
        Route::post('/update', [ResourceController::class, 'update'])->name('update');
        Route::post('/search', [ResourceController::class, 'search'])->name('search');
        Route::get('/', [ResourceController::class, 'index'])->name('index');
        Route::get('/index2', [ResourceController::class, 'index2'])->name('index2');
        Route::get('/create', [ResourceController::class, 'create'])->name('create');
        Route::post('/store', [ResourceController::class, 'store'])->name('store');
        Route::post('/update-status_available/{id}', [ResourceController::class, 'updateStatus_available'])->name('updateStatus_available');
        Route::post('/update-status_is_not_available/{id}', [ResourceController::class, 'updateStatus_is_not_available'])->name('updateStatus_is_not_available');

  });



    });

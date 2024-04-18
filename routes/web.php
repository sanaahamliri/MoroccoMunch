<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/team', function () {
    return view('team');
});


Route::get('/feature', function () {
    return view('feature');
});


Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/details', function () {
    return view('details');
});





Route::get('/chef', function () {
    return view('chef/dashboard');
});

Route::get('/validateChef', function () {
    return view('admin/validate');
});

Route::get('/validate', function () {
    return view('admin/validateChef');
});

Route::get('/plate', function () {
    return view('admin/plate');
});

Route::get('/plateAdd', function () {
    return view('plateAdd');
});


Route::get('/plate', function () {
    return view('chef.plateAdd');
});
Route::get('/plateDetails', function () {
    return view('chef.detailsPlate');
});

Route::get('/Edit', function () {
    return view('chef.plateEdit');
});

Route::get('dashboard', [UserController::class, 'dashboard']); 
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
Route::get('/register',[UserController::class,'create']);
Route::post('register',[UserController::class,'store'])->name('register');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::resource('/categories', CategoryController::class);

Route::resource('plate', PlateController::class);
Route::get('chef', [PlateController::class, 'showPlates']);

Route::get('detailsPlate/{plate}', [PlateController::class, 'showPlatesDetails'])->name('singlePage');

















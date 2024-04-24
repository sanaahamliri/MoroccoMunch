<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ClientController;
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


Route::get('/personnalisation', function () {
    return view('personnalisation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', function () {
    return view('booking');
});


Route::get('/client', [ClientController::class, 'showValidPlates']);

Route::get('/details', function () {
    return view('details');
});





Route::get('/chef', function () {
    return view('chef/dashboard');
});

Route::get('/validateChef', [ChefController::class, 'index']);


Route::get('/validate', [ClientController::class, 'index']);



Route::get('/adminplate',[PlateController::class, 'showInvalidPlates']);
 
Route::patch('/adminplate/{plate}', [PlateController::class, 'validation'])->name('admin.plate');

Route::get('/plateAdd', function () {
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
Route::get('/register', [UserController::class, 'create']);
Route::post('register', [UserController::class, 'store'])->name('register');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::resource('/categories', CategoryController::class);

Route::resource('plate', PlateController::class);

Route::get('/clientTeam', [ChefController::class, 'showTeam']);


Route::get('chef', [PlateController::class, 'showPlates']);
Route::get('/plates/filter/{id}', [PlateController::class, 'filter'])->name('plate.filter');

Route::get('detailsMore/{plate}', [PlateController::class, 'viewMore'])->name('more');

Route::get('detailsPlate/{plate}', [PlateController::class, 'showPlatesDetails'])->name('singlePage');
Route::get('admin/detailsPlate/{plate}', [PlateController::class, 'showPlatesDetailsAdmin'])->name('singlePageAdmin');
Route::patch('/admin/{client}/validate', [ClientController::class, 'ban'])->name('client.ban');
Route::put('/admin/validateChef/{chef}', [ChefController::class, 'ban'])->name('chef.ban');

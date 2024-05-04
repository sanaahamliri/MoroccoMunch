<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// ***********Landing Page*******************

Route::get('/', [LandingPageController::class, 'landingChefs']);

Route::get('/about', function () {
    return view('landingPage.about');
});

Route::get('/team', function () {
    return view('landingPage.team');
});

Route::get('/feature', function () {
    return view('landingPage.feature');
});
// ********************end Landing Page********************


// ***************************Client Page******************************
Route::middleware(['auth', 'role:client', 'clientbanned'])->group(function () {

    Route::get('/client', [ClientController::class, 'showValidPlates']);

    Route::get('/details', function () {
        return view('client.details');
    });
    Route::resource('/comment', CommentaireController::class);

    Route::post('/reservation', [ReservationController::class, 'store'])->name('plate.reserve');

    Route::get('/plates/filter/{id}', [PlateController::class, 'filter'])->name('plate.filter');
    Route::get('detailsMore/{plate}', [PlateController::class, 'viewMore'])->name('more');
    Route::get('chef/{chef}', [ChefController::class, 'viewMoreChef'])->name('moreChef');
});

// *******************end Client Pge***************************************



// *******************************Chef Page*********************************
Route::middleware(['auth', 'role:chef', 'chefbanned'])->group(function () {
    Route::get('/chef', function () {
        return view('chef/dashboard');
    });

    Route::get('/pp', function () {
        return view('chef/editProfile');
    });

    Route::get('/plateAdd', function () {
        return view('chef.plateAdd');
    });

    Route::get('/Edit', function () {
        return view('chef.plateEdit');
    });

    Route::get('/plateDetails', function () {
        return view('chef.detailsPlate');
    });
    Route::resource('plate', PlateController::class);
    Route::get('/profileChef', [ChefController::class, 'ChefInfos']);
    Route::patch('/editChef/{chef}', [ChefController::class, 'editProfile'])->name('editProfile');
    Route::patch('/editUser/{user}', [ChefController::class, 'editUserProfile'])->name('editUserProfile');
    Route::get('/editChef', [ChefController::class, 'UpdateProfile']);
    Route::get('detailsPlate/{plate}', [PlateController::class, 'showPlatesDetails'])->name('singlePage');
    Route::get('chef', [PlateController::class, 'showPlates']);
});
// ************************************Chef End***********************************************************

// *********************************Admin*****************************************************************
Route::middleware(['auth', 'role:admin'])->group(function () {

Route::get('/validateChef', [ChefController::class, 'index']);
Route::get('/validate', [ClientController::class, 'index']);
Route::get('/adminplate', [PlateController::class, 'showInvalidPlates']);
Route::patch('/adminplate/{plate}', [PlateController::class, 'validation'])->name('admin.plate');
Route::delete('/adminplate/{plate}', [PlateController::class, 'Refuse'])->name('admin.plateRefuse');
Route::resource('/categories', CategoryController::class);
Route::get('/reservation_validation', [ReservationController::class, 'index']);
Route::get('admin/detailsPlate/{plate}', [PlateController::class, 'showPlatesDetailsAdmin'])->name('singlePageAdmin');
Route::patch('/admin/{client}/validate', [ClientController::class, 'ban'])->name('client.ban');
Route::put('/admin/validateChef/{chef}', [ChefController::class, 'ban'])->name('chef.ban');
Route::patch('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
Route::delete('/reservation/{reservation}/delete', [ReservationController::class, 'destroy'])->name('reservation.destroy');

});
// *************************************Admin End*************************************************************





// *****************************Register And Login***********************************

Route::middleware('guest')->group(function () {
    Route::get('login', [UserController::class, 'index'])->name('login');
    Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
    Route::get('/register', [UserController::class, 'create']);
    Route::post('register', [UserController::class, 'store'])->name('register');
});

// ****************************Register And Login End*********************************




Route::middleware(['auth'])->group(function () {
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
});



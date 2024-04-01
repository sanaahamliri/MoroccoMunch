<?php

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


Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
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
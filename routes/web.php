<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/appoinment', function () {
    return view('/appoinment');
});

Route::get('/blog-sidebar', function () {
    return view('/blog-sidebar');
});

Route::get('/blog-single', function () {
    return view('/blog-single');
});

Route::get('/confirmation', function () {
    return view('/confirmation');
});

Route::get('/contact', function () {
    return view('/contact');
});

Route::get('/department-single', function () {
    return view('/department-single');
});

Route::get('/department', function () {
    return view('/department');
});

Route::get('/doctor-single', function () {
    return view('/doctor-single');
});

Route::get('/doctor', function () {
    return view('/doctor');
});

Route::get('/sevice', function () {
    return view('/service');
});

Route::get('/login', function () {
    return view('login');
});
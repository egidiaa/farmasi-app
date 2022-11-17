<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;
use App\Http\Controllers\ApotekerController;

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

Route::get('/', [ApotekController::class,'/']);

Route::get('/index', [ApotekController::class,'index']);

Route::get('/index-admin', [ApotekController::class,'indexa']);

Route::get('/about', [ApotekController::class,'about']);

Route::get('/contact', [ApotekController::class,'contact']);

Route::get('/main', [ApotekController::class,'main']);

Route::get('/register', [ApotekController::class,'register']);

Route::get('/login', [ApotekController::class,'login']);

Route::get('/daftar-obat', [ApotekController::class,'daftarobat']);
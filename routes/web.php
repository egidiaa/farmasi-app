<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;

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

// Route::get('/', [ApotekController::class,'/']);

Route::get('/', [ApotekController::class,'index']);

Route::get('/about', [ApotekController::class,'about']);

Route::get('/cart', [ApotekController::class,'cart']);

Route::get('/checkout', [ApotekController::class,'checkout']);

Route::get('/contact', [ApotekController::class,'contact']);

Route::get('/main', [ApotekController::class,'main']);

Route::get('/shop-single', [ApotekController::class,'shop-single']);

Route::get('/shop', [ApotekController::class,'shop']);

Route::get('/thankyou', [ApotekController::class,'thankyou']);

Route::get('/formlogin', [ApotekController::class,'formlogin']);

Route::get('/register', [ApotekController::class,'register']);

Route::get('/blank', [ApotekController::class,'blank']);

Route::get('/indexadmin', [ApotekController::class,'indexadmin']);

Route::get('/loginadmin', [ApotekController::class,'loginadmin']);

Route::get('/registeradmin', [ApotekController::class,'registeradmin']);

Route::get('/tables', [ApotekController::class,'tables']);

Route::get('/dataobat', [ApotekController::class,'dataobat']);
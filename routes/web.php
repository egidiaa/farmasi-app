<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;
use App\Models\Apoteker;

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

Route::get('/', [ApotekController::class,'index'])->name('home');
Route::get('/about', [ApotekController::class,'about']);
Route::get('/cart', [ApotekController::class,'cart']);
Route::get('/checkout', [ApotekController::class,'checkout']);
Route::get('/contact', [ApotekController::class,'contact']);
Route::get('/shop-single', [ApotekController::class,'shopsingle']);
Route::get('/shop', [ApotekController::class,'shop']);
Route::get('/thankyou', [ApotekController::class,'thankyou']);
Route::get('/formlogin', [ApotekController::class,'formlogin'])->name('login');
Route::post('/formlogin', [ApotekController::class,'formloginpost']);
Route::get('/register', [ApotekController::class,'register']);
Route::post('/register', [ApotekController::class,'registerpost']);
Route::any('/logout',[ApotekController::class,'logout']);
Route::get('/registeradmin', [ApotekController::class,'registeradmin']);

Route::group(['middleware'=>['auth','ceklevel:admin']],function ()
{
Route::get('/dataobat', [ApotekController::class,'dataobat']);
Route::get('/indexadmin', [ApotekController::class,'indexadmin']);
Route::get('/tables', [ApotekController::class,'tables']);
Route::post('/edit-obat', [ApotekController::class,'editobat']);
Route::get('/hapus-obat', [ApotekController::class,'hapusobat']);
Route::post('/tambah-obat', [ApotekController::class,'tambahobat']);
});
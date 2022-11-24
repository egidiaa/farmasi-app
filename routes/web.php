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

Route::get('/beranda', [ApotekController::class,'beranda']);

Route::get('/cart-penjualan', [ApotekController::class,'cartpenjualan']);

Route::get('/data-expire', [ApotekController::class,'dataexpire']);

Route::get('/data-kategori', [ApotekController::class,'datakategori']);

Route::get('/data-obat', [ApotekController::class,'dataobat']);

Route::get('/data-pembelian', [ApotekController::class,'datapembelian']);

Route::get('/register', [ApotekController::class,'register']);

Route::get('/login', [ApotekController::class,'login']);

Route::get('/data-penjualan', [ApotekController::class,'datapenjualan']);

Route::get('/data-satuan', [ApotekController::class,'datasatuan']);

Route::get('/data-suplier', [ApotekController::class,'datasuplier']);

Route::get('/datepicker', [ApotekController::class,'datepicker']);

Route::get('/form-penjualan', [ApotekController::class,'formpenjualan']);

Route::get('/form-pembelian', [ApotekController::class,'formpembelian']);

Route::get('/laporan', [ApotekController::class,'laporan']);

Route::get('/pengaturan', [ApotekController::class,'pengaturan']);

Route::get('/stok-opname', [ApotekController::class,'stokopname']);

Route::get('/struk', [ApotekController::class,'struk']);

Route::get('/user', [ApotekController::class,'user']);

Route::get('/view', [ApotekController::class,'view']);
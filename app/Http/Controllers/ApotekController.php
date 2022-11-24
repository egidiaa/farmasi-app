<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function login(){
        return view('login');
    }

    public function beranda(){
        return view('beranda');
    }

    public function cartpenjualan(){ 
        return view('cart-penjualan');
    }

    public function dataexpire(){ 
        return view('data-expire');
    }

    public function datakategori(){ 
        return view('data-kategori');
    }

    public function dataobat(){ 
        return view('data-obat');
    }

    public function datapembelian(){ 
        return view('data-pembelian');
    }

    public function datapejualan(){ 
        return view('data-penjualan');
    }

    public function shopsingle(){ 
        return view('shop-single');
    }

    public function datasatuan(){ 
        return view('data-satuan');
    }

    public function datasuplier(){ 
        return view('data-suplier');
    }

    public function register(){ 
        return view('register');
    }

    public function datepicker(){ 
        return view('datepicker');
    }

    public function formpenjualan(){ 
        return view('form-penjualan');
    }

    public function formpembelian(){ 
        return view('form-pembelian');
    }

    public function laporan(){ 
        return view('laporan');
    }

    public function pengaturan(){ 
        return view('pengaturan');
    }

    public function stokopname(){ 
        return view('stok-opname');
    }

    public function struk(){ 
        return view('struk');
    }

    public function user(){ 
        return view('user');
    }

    public function view(){ 
        return view('view');
    }


































    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function login(){
        return view('login');
    }

    public function indexa(){
        return view('index-admin');
    }

    public function index(){ 
        return view('index');
    }

    public function about(){ 
        return view('about');
    }

    public function cart(){ 
        return view('cart');
    }

    public function checkout(){ 
        return view('checkout');
    }

    public function contact(){ 
        return view('contact');
    }

    public function main(){ 
        return view('main');
    }

    public function shopsingle(){ 
        return view('shop-single');
    }

    public function shop(){ 
        return view('shop');
    }

    public function thankyou(){ 
        return view('thankyou');
    }

    public function register(){ 
        return view('register');
    }

    public function daftarobat(){ 
        return view('daftar-obat');
    }


































    
}
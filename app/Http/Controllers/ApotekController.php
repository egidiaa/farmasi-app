<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function formlogin(){
        return view('formlogin');
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

    public function blank(){ 
        return view('admin.blank');
    }

    public function indexadmin(){ 
        return view('admin.index-admin');
    }

    public function loginadmin(){ 
        return view('admin.login-admin');
    }

    public function registeradmin(){ 
        return view('admin.register-admin');
    }

    public function forgotpassword(){ 
        return view('admin.forgot-password');
    }

    public function tables(){ 
        return view('admin.tables');
    }

    public function dataobat(){ 
        $obat = Obat::all();
        return view('admin.data-obat',[
            'obat'=> $obat
        ]);
    }
}

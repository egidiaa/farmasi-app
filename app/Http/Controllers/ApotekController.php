<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApotekController extends Controller
{
    public function formlogin(){
        return view('formlogin');
    }
    public function formloginpost(Request $req){
        $email = $req->email;
        $password = $req->password;

        if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 'user'))) {
            $req->session()->regenerate();
            return redirect('/');
        }else  if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 'admin'))) {
            $req->session()->regenerate();
            return redirect('/indexadmin');
        }
      
        return back()->with('salah', 'Silahkan cek kembali email atau password anda')->with('email', $email);
  
        return route('login');
    }
    public function registerpost(Request $request)
    {
        $valid =  $request->validate([
            'nama' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'min:5|required',
            'password_confirmation' => 'min:5|required|same:password'
        ]);
        $valid['password'] = bcrypt($request['password']);
        $valid['level'] = "user";
        User::create($valid);
        return redirect('/formlogin')->withSuccess('Selamat anda berhasil terdaftar')->with('email',$valid['email']);;
    }

    public function index(){ 
        return view('index');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
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

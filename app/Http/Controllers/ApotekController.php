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
   
    public function hapusobat()
    {
        Obat::where('kode_obat',request('id'))->delete();
        return back()->withSuccess('Data berhasil dihapus');
    }
    public function registerpost(Request $request)
    {
        $valid =  $request->validate([
            'nama' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'min:5|required',
            'password_confirmation' => 'min:5|required|same:password',
            'address'=>'required',
            'no_telp'=>'required'
        ]);
        $valid['password'] = bcrypt($request['password']);
        $valid['level'] = "user";
        User::create($valid);
        return redirect('/formlogin')->withSuccess('Selamat anda berhasil terdaftar')->with('email',$valid['email']);;
    }

    public function index(){ 
        return view('index');
    }
    public function tambahobat(Request $request)
    {
        $imagename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('images/obat/',$imagename);
        $data = [
            'kode_obat'=>$request->kode_obat,
                'nama_obat'=>$request->nama_obat,
                'stock'=>$request->stock,
                'satuan'=>$request->satuan,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual,
                'image'=>$imagename
        ];
        Obat::create($data);
        return back()->withSuccess('Data berhasil tambahkan');
    }
    public function editobat(Request $request)
    {
        $request->file('gambar');
        if($request->file('gambar')!=null){
            $imagename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images/obat/',$imagename);
            Obat::find($request->id)->update([
                'kode_obat'=>$request->kode_obat,
                'nama_obat'=>$request->nama_obat,
                'stock'=>$request->stock,
                'satuan'=>$request->satuan,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual,
                'image'=>$imagename
            ]);
        }else{
            Obat::find($request->id)->update([
                'kode_obat'=>$request->kode_obat,
                'nama_obat'=>$request->nama_obat,
                'stock'=>$request->stock,
                'satuan'=>$request->satuan,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual
            ]);
        }
        return back()->withSuccess('Data berhasil diperbarui');
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
        $customer = User::where('level','user')->get();
        return view('admin.tables',[
            'customer'=>$customer
        ]);
    }

    public function dataobat(){ 
        $obat = Obat::all();
        return view('admin.data-obat',[
            'obat'=> $obat
        ]);
    }
}

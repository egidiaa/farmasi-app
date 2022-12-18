<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\detil_pemesanan;
use App\Models\Obat;
use App\Models\Pemesanan;
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
            'password_confirmation' => 'min:5|required|same:password',
            'address'=>'required',
            'no_telp'=>'required'
        ]);
        $valid['password'] = bcrypt($request['password']);
        $valid['level'] = "user";
        User::create($valid);
        return redirect('/formlogin')->withSuccess('Selamat anda berhasil terdaftar')->with('email',$valid['email']);;
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

    public function hapusobat()
    {
        Obat::where('kode_obat',request('id'))->delete();
        return back()->withSuccess('Data berhasil dihapus');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }


    public function index(){ 
        $obat = Obat::all();
        return view('index',[
            'obat'=>$obat
        ]);
    }
    public function about(){ 
        return view('about');
    }

    public function cart(){ 
        $obat =  DB::table('detil_pemesanans as dp')
        ->select('dp.*','o.*','dp.jumlah_obat')
        ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
        ->join('obats as o','o.id','=','dp.id_obat')
        ->where('p.user_id',auth()->user()->id)
        ->get();
        // dd($obat);
        $total_tagihan = pemesanan::where('user_id',auth()->user()->id)->get();
        if(count($total_tagihan)==0){
            $total_tagihan = 0;
        }else{
            $total_tagihan = $total_tagihan[0]->total_tagihan;
        }
        return view('cart',[
            'obat'=>$obat,
            'total_tagihan'=> $total_tagihan
        ]);
    }

    public function checkout(){ 
        return view('checkout');
    }
    
    public function contact(){ 
        return view('contact');
    }
    public function hapuskeranjang()
    {
        $id = request('id');
        DB::table('detil_pemesanans as dp')
        ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
        ->join('obats as o','o.id','=','dp.id_obat')
        ->where('dp.id_obat',$id)->where('p.user_id',auth()->user()->id)
        ->delete();
        return response('Data berhasil dihapus');
    }
    public function ubahkeranjang()
    {
        $qty = request('qty');
        $id = request('id');
        $keranjang = DB::table('detil_pemesanans as dp')
        ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
        ->join('obats as o','o.id','=','dp.id_obat')
        ->where('dp.id_obat',$id)->where('p.user_id',auth()->user()->id)
        ->get();
        DB::table('detil_pemesanans as dp')
        ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
        ->join('obats as o','o.id','=','dp.id_obat')
        ->where('dp.id_obat',$id)->where('p.user_id',auth()->user()->id)
        ->update([
            'dp.jumlah_obat'=>$qty,
            'p.total_tagihan'=>$keranjang[0]->harga_jual* $qty
    ]);
        return response('Data berhasil diubah');
    }
    public function tambahkeranjang()
    {
        $idpemesanan = Pemesanan::where('user_id',auth()->user()->id)->count();
        if ($idpemesanan == 0) {
               $pemesanan = Pemesanan::create([
                'user_id'=>auth()->user()->id,
                'total_tagihan'=>0
               ]);
        }else{
            $pemesanan = Pemesanan::where('user_id',auth()->user()->id)->get();
        }
        $qty = request('qty');
        $id = request('id');
        $keranjang = DB::table('detil_pemesanans as dp')
        ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
        ->join('obats as o','o.id','=','dp.id_obat')
        ->where('dp.id_obat',$id)->where('p.user_id',auth()->user()->id)
        ->get();
        if(count($keranjang)!=0){
            $jumlahobat = $keranjang[0]->jumlah_obat + $qty;
            $total_tagihan = $keranjang[0]->total_tagihan + ($qty * $keranjang[0]->harga_jual);
            DB::table('detil_pemesanans as dp')
            ->join('pemesanans as p', 'p.id', '=', 'dp.id_pemesanan')
            ->where('dp.id_obat',$id)->where('p.user_id',auth()->user()->id)->update(['jumlah_obat'=>$jumlahobat,'total_tagihan'=>$total_tagihan]);
        }else{
            $data = [
                'id_obat'=>$id,
                'id_pemesanan'=>$pemesanan[0]->id,
                'jumlah_obat'=>$qty
            ];
            $obat =  Obat::find($id);
            $total_tagihan = $pemesanan[0]->total_tagihan +($qty * $obat->harga_jual);
                Pemesanan::find($pemesanan[0]->id)->update(['total_tagihan'=>$total_tagihan]);
                $data['id_pemesanan'] = $pemesanan[0]->id;
                detil_pemesanan::create($data);
            }
            return response('Data berhasil ditambahkan');
        }


    public function shopsingle($id){
        $obat = Obat::where('kode_obat',$id)->get(); 
        return view('shop-single',[
            'obat'=>$obat
        ]);
    }

    public function tes($name)
    {
        return User::where('nama','LIKE','%'.$name.'%')->get();;
    }
    public function shop(){ 
        $obat = Obat::all();
        return view('shop',[
            'obat'=>$obat
        ]);
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

    public function profil(){
        return view('admin.profil');
    }

    public function dashboarduser(){
        return view('dashboarduser');
    }

    public function profiluser(){
        return view('profiluser');
    }

}

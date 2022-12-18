<!DOCTYPE html>
<html lang="en">
<head>
<title>NE Pharmacy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">

<meta name="csrf-token" content="{{ csrf_token()}}">
</head>
<body>
<div class="site-wrap">
<div class="site-wrap">
  @include('navbar')

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/index">Beranda</a> <span class="mx-2 mb-0">/</span> <a
            href="/shop">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$obat[0]->nama_obat}}</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="{{asset('images/obat/'.$obat[0]->image)}}" alt="Image" class=" p-5">
          </div>
        </div>
       <input type="hidden" id="idobat" value="{{$obat[0]->id}}">
        <div class="col-md-6">
          <h2 class="text-black">{{$obat[0]->nama_obat}}</h2>
          <p>{{$obat[0]->satuan}}</p>
          <p>  <strong class="text-primary h4">Rp{{$obat[0]->harga_jual}}</strong></p>
          <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 220px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="number" min="1" id="jumlah" class="form-control text-center" value="1" placeholder=""
                aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>
          </div>
          <p><button id="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Masukkan ke dalam Keranjang</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h3 class="text-white">Cekout Sekarang Juga! </h3>
        <p class="text-white">Segera cekout barang anda sekarang juga dan terimakasih telah memilih NEpharpacy. </p>
        <p class="mb-0"><a href="/formlogin" class="btn btn-outline-white">-NEpharpacy-</a></p>
      </div>
      </div>
    </div>
  </div>
  <input type="hidden" id="login" value="{{auth()->check()}}">
  <footer class="site-footer">
    <div class="container">
      <div class="row">



        </div>
        @include('footer')
      </div>

      </div>
    </div>
  </footer>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">
      $('#submit').click(function (e) { 
        e.preventDefault();
        var id = $('#idobat').attr('value');
        var isLogin = $('#login').attr('value'); ;
        if(!isLogin){
          window.location.replace('/formlogin');
        }
        var x = parseInt($('#jumlah').val());
        if (isNaN(x)) {
          alert('Masukkan Jumlah yang benar');
          $('#jumlah').val(1);
        }else{
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});  
          $.ajax({
            type: "POST",
            url: "/tambah-keranjang",
            data: {
              'id': id ,
              'qty': x
            },
            success: function (response) {
              alert(response);
          $('#jumlah').val(1)

            }
          });
        }
      //  alert(x);
      });
  </script>
</body>

</html>
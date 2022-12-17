<!DOCTYPE html>
<html lang="en">

<head>
  <title>NE Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
@include('navbar')
  <div class="site-wrap">
  <div class="site-wrap">
    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('asset/pharma.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">Layanan Farmasi</strong> Buka 24 Jam</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Siap Melayani Kebutuhan Obat Anda</p>.
                  </div>
                </div>
                
                <p><a href="/formlogin" class="btn btn-primary px-5 py-3">Belanja Sekarang Juga</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('asset/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Solusi Obat <strong class="text-primary">Setiap Hari</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Temukan Obat yang Anda butuhkan disini sekarang juga.</p>
                  </div>
                </div>
                <p><a href="/formlogin" class="btn btn-primary px-5 py-3">Belanja Sekarang Juga</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">Obat Baru Setiap Hari</a></h3>
              <p>Temukan Obat yang Anda butuhkan disini sekarang juga.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Selengkapnya</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Obat Dijamin</a></h3>
              <p>Pembelian Obat yang dijamin kualitasnya.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Selengkapnya</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Farmasi <strong class="text-primary">Produk</strong></h2>
          </div>
        </div>
        <div class="row">
      
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
          @foreach ($obat as $item)
              <div class="text-center item mb-4 item-v2">
                {{-- <span class="onsale">Sale</span> --}}
                <a href="/shop-single/{{$item->kode_obat}}"> <img src="asset/{{$item->image}}" height="370px" width="270px" alt="Image"></a>
                <h3 class="text-dark"><a href="/shop-single/{{$item->kode_obat}}">{{$item->nama_obat}}</a></h3>
                <p class="price">RP {{$item->harga_jual}}</p>
              </div>
          @endforeach

              {{-- <div class="text-center item mb-4 item-v2">
                <a href="/shop-single"> <img src="asset/entrostop.jpg" alt="Image"></a>
                <h3 class="text-dark"><a href="/shop-single">Entrostop</a></h3>
                <p class="price">RP 6.000</p>
              </div>

              <div class="text-center item mb-4 item-v2">
                <span class="onsale">Sale</span>
                <a href="/shop-single"> <img src="asset/mixagrip.jpg" alt="Image"></a>
                <h3 class="text-dark"><a href="/shop-single">Mixagrip</a></h3>
                <p class="price">RP 3.500</p>
              </div>

              <div class="text-center item mb-4 item-v2">
                <a href="/shop-single"> <img src="asset/imboost.png" alt="Image"></a>
                <h3 class="text-dark"><a href="/shop-single">Imboost</a></h3>
                <p class="price">RP 12.000</p>
              </div> --}}

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('asset/hero_bg_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
         <div class="col-lg-7">
           <h3 class="text-white">Sign Up Sekang!</h3>
           <p class="text-white">Daftar Sekarang juga untuk layanan lebih lanjut</p>
           <p class="mb-0"><a href="/formlogin" class="btn btn-outline-white">Sign up</a></p>
         </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Kenapa <strong class="text-primary">Harus Kami</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Pembelian obat dengan cepat dan mudah hanya dengan sekali klik.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Menyediakan Obat yang terjamin mutunya</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Terdapat banyak promo dan diskon untuk pelanggan baru dan juga pelanggan setia kami.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('footer')
     </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="text/javascript">
$('#beranda').addClass('active');
</script>
</body>

</html>
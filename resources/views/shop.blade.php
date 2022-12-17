<!DOCTYPE html>
<html lang="en">

<head>
  <title>NE Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">



  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

  <body>
    <div class="site-wrap">
    <div class="site-wrap">
    @include('navbar')
    
      <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="/index">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Toko</strong></div>
          </div>
        </div>
      </div>
      

      <div class="site-section bg-light">
        <div class="container">
          
          
      
          <div class="row">
            @foreach ($obat as $item)
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              {{-- <span class="onsale">Sale</span> --}}
              <a href="/shop-single"> <img src="asset/{{$item->image}}" height="370px" width="270px" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">{{$item->nama_obat}}, 60ml </a></h3>
              <p class="price"> RP {{$item->harga_jual}}</p>
            </div>
            @endforeach
          
            {{-- <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/mylantak.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Mylanta</a></h3>
              <p class="price">RP 13.500</p>
            </div> --}}
            {{-- <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/dextamine.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Dextamine</a></h3>
              <p class="price">RP 2.500</p>
            </div>
      
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
      
              <a href="/shop-single"> <img src="asset/antimo.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Antimo</a></h3>
              <p class="price"><del>RP 4.000</del> &mdash; Rp 3.500</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/batuk_nodahak.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Siladex Antitussive, 100ml</a></h3>
              <p class="price">RP 20.000</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/obat_dahak.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Siladex </a></h3>
              <p class="price"><del>RP 19.000</del> &mdash; </p>
            </div>

            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/decolgen.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Decolgen</a></h3>
              <p class="price"><del>Rp 5.000</del> &mdash; Rp 4.500</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/decolsin.jpg" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Decolsin</a></h3>
              <p class="price">Rp 4.500</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/ponstan.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Ponstan</a></h3>
              <p class="price">RP 6.000</p>
            </div>
            
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            
              <a href="/shop-single"> <img src="asset/favimol.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Favimol</a></h3>
              <p class="price"><del>Rp 32.000</del> &mdash; RP 30.000</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/panadol_anak.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Panadol Anak</a></h3>
              <p class="price">Rp 34.000</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/piroxicam.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Piroxicam</a></h3>
              <p class="price"><del>RP 8.000 </del> &mdash; RP 7.000</p>
            </div> --}}
          </div>
          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <div class="site-block-27">
                <ul>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      @include('footer')
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>
<script type="text/javascript">
  $('#toko').addClass('active');
  </script>
</body>

</html>
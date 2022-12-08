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
      
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Urut Berdasarkan Harga</h3>
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
            <div class="col-lg-6 text-lg-right">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Urut</h3>
              <button type="button" class="btn btn-primary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
                data-toggle="dropdown">Referensi</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="#">Relevan</a>
                <a class="dropdown-item" href="#">Nama, A ke Z</a>
                <a class="dropdown-item" href="#">Nama, Z ke A</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Harga, Rendah ke Tinggi</a>
                <a class="dropdown-item" href="#">Harga, Tinggi ke Rendah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section bg-light">
        <div class="container">
          
          
      
          <div class="row">
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Jual</span>
              <a href="/shop-single"> <img src="asset/product_01.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Bioderma</a></h3>
              <p class="price"><del>95.00</del> &mdash; $55.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_02.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Chanca Piedra</a></h3>
              <p class="price">$70.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_03.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Umcka Cold Care</a></h3>
              <p class="price">$120.00</p>
            </div>
      
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
      
              <a href="/shop-single"> <img src="asset/product_04.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Cetyl Pure</a></h3>
              <p class="price"><del>45.00</del> &mdash; $20.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_05.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">CLA Core</a></h3>
              <p class="price">$38.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/product_06.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Poo Pourri</a></h3>
              <p class="price"><del>$89</del> &mdash; $38.00</p>
            </div>

            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/product_01.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Bioderma</a></h3>
              <p class="price"><del>95.00</del> &mdash; $55.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_02.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Chanca Piedra</a></h3>
              <p class="price">$70.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_03.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Umcka Cold Care</a></h3>
              <p class="price">$120.00</p>
            </div>
            
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            
              <a href="/shop-single"> <img src="asset/product_04.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Cetyl Pure</a></h3>
              <p class="price"><del>45.00</del> &mdash; $20.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <a href="/shop-single"> <img src="asset/product_05.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">CLA Core</a></h3>
              <p class="price">$38.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="/shop-single"> <img src="asset/product_06.png" alt="Image"></a>
              <h3 class="text-dark"><a href="/shop-single">Poo Pourri</a></h3>
              <p class="price"><del>$89</del> &mdash; $38.00</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <div class="site-block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

              <div class="block-7">
                <h3 class="footer-heading mb-4">Tentang <strong class="text-primary">Kami</strong></h3>
                <p>Solusi Cepat, Mudah, dan Nyaman Untuk Kebutuhan Obat Anda.</p>
              </div>

            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">Navigasi</h3>
              <ul class="list-unstyled">
                <li><a href="/shop">Suplemen</a></li>
                <li><a href="/shop">Vitamin</a></li>
                <li><a href="/shop">Diet &amp; Nutrisi</a></li>
                <li><a href="/shop">Teh &amp; Kopi</a></li>
              </ul>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Info Kontak</h3>
                <ul class="list-unstyled">
                  <li class="address">Surabaya, Indonesia</li>
                  <li class="phone"><a href="tel://081234567890"></a>081234567890</li>
                  <li class="email">nepharmacy@domain.com</li>
                </ul>
              </div>


            </div>
          </div>
          </div>
        </div>
      </footer>
   

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>
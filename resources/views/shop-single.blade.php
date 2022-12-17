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
<div class="site-wrap">
<div class="site-wrap">
  @include('navbar')

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/index">Beranda</a> <span class="mx-2 mb-0">/</span> <a
            href="/shop">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Ibuprofen Tablet, 200mg</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="asset/product_07_large.png" alt="Image" class="img-fluid p-5">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{$obat[0]->nama_obat}}, 200mg</h2>
          <p>Ibuprofen adalah obat  untuk mengobati sakit kepala, sakit gigi, nyeri otot, rasa sakit pada saat haid, rasa sakit/nyeri setelah operasi.</p>
          <p><del>$95.00</del>  <strong class="text-primary h4">$55.00</strong></p>
          <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 220px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder=""
                aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>
  
          </div>
          <p><a href="/cart" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Masukkan ke dalam Keranjang</a></p>

          <div class="mt-5">
            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Informasi Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">Spesifikasi</a>
              </li>
          
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table custom-table">
                  <thead>
                    <th>Bahan</th>
                    <th>Deskripsi</th>
                    <th>Kemasan</th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Mengatasi Nyeri : Kaplet Kekuatan Ekstra Acetaminophen PM, 500 mg, 100 / Botol</td>
                      <td>1 BT</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Mengatasi Nyeri : Kaplet Kekuatan Ekstra Acetaminophen PM, 500 mg, 100 / Botol</td>
                      <td>144/CS</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Mengatasi Nyeri : Kaplet Kekuatan Ekstra Acetaminophen PM, 500 mg, 100 / Botol</td>
                      <td>1 EA</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          
                <table class="table custom-table">
          
                  <tbody>
                    <tr>
                      <td>KODE HPIS </td>
                      <td class="bg-light">999_200_40_0</td>
                    </tr>
                    <tr>
                      <td>HANYA UNTUK KESEHATAN</td>
                      <td class="bg-light">Tidak</td>
                    </tr>
                    <tr>
                      <td>GRATIS LATEX</td>
                      <td class="bg-light">Iya, Tidak</td>
                    </tr>
                    <tr>
                      <td>RUTE OBAT</td>
                      <td class="bg-light">Topik</td>
                    </tr>
                  </tbody>
                </table>
          
              </div>
          
            </div>
          </div>

  
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-lg-7">
        <h3 class="text-white">Sign up Untuk diskon 55% </h3>
        <p class="text-white">Ayo Daftar sekarang juga untuk mendapatkan diskon sebesar 55% sekarang juga!</p>
        <p class="mb-0"><a href="/formlogin" class="btn btn-outline-white">Sign up</a></p>
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
</div>

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
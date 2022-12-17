<!DOCTYPE html>
<html lang="en">

<head>
  <title>NE Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


  @include('navbar')
  

    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('asset/hero_bg.jpg');">
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
                
                <p><a href="#" class="btn btn-primary px-5 py-3">Belanja Sekarang Juga</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Obat Baru <strong class="text-primary">Setiap Hari</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Temukan Obat yang Anda butuhkan disini sekarang juga.</p>
                  </div>
                </div>
                <p><a href="#" class="btn btn-primary px-5 py-3">Belanja Sekarang Juga</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="/index">Beranda</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Keranjang</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Foto</th>
                    <th class="product-name">Produk</th>
                    <th class="product-price">Harga</th>
                    <th class="product-quantity">Kuantitas</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="tes">
                    <td class="product-thumbnail">
                      <img src="asset/product_02.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Ibuprofen</h2>
                    </td>
                    <td>$55.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>
    
                    </td>
                    <td>$49.00</td>
                    <td><a   class="btn btn-primary deletebutton height-auto btn-sm">X</a></td>
                  </tr>
    
                  <tr>
                    <td class="product-thumbnail">
                      <img src="asset/product_01.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Bioderma</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>
    
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block">Perbarui Keranjang</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block">Lanjut Belanja</button>
              </div>
            </div>
            <div class="row">
           
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Gunakan Kupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total Belanja</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='/checkout'">Proses Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Tentang Kami <strong class="text-primary"></strong></h3>
              <p>Solusi Cepat, Mudah, dan Nyaman Untuk Kebutuhan Obat Anda.</p>
            </div>

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
  <script type="text/javascript">
      $('.deletebutton').click(function (){
       if(confirm('yakin dek?')){
        $('#tes').hide();
       }
      });
  </script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script type="text/javascript">
    $('#cart').addClass('active');
    </script>
</body>

</html>
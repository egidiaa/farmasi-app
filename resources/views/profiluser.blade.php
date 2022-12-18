<!DOCTYPE html>
<html lang="en">

<head>
  <title>NE Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">


</head>

<body>
  @include('navbar')
  <div class="site-wrap">
  <div class="site-wrap">


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="/index">Beranda</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Profil Pelanggan</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
    <form action="#" method="post">
    
        <div class="m-2 p-lg-1 border">
        <div class="row">
        
            <div class="col-md-5 border-center">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profil Pelanggan</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Nama</label><span class="form-control">
                            @if (auth()->check())
                            {{ auth()->user()->nama }}
                            @else
                            Pelanggan
                            @endif</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><span class="form-control">
                            @if (auth()->check())
                            {{ auth()->user()->email }}
                            @else
                            nepharmacy@gmail.com
                            @endif
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Alamat</label><span class="form-control">
                            @if (auth()->check())
                            {{ auth()->user()->address }}
                            @else
                            Surabaya,Indonesia
                            @endif
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">No Telepon</label><span class="form-control">
                            @if (auth()->check())
                            {{ auth()->user()->no_telp }}
                            @else
                            081234567890
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">

            
          </div>
        </div>
        
      </div>
  
      <footer class="site-footer">
        <div class="container">
          
            @include('footer')
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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#kontakkami').addClass('active');
    </script>
  </body>
  
  </html>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <title>login</title>
</head>

<body>
  @if (session()->has('salah'))
    <script type="text/javascript">
        alert('{{ session('salah') }}');
    </script>
  @endif 
  @if (session()->has('success'))
    <script type="text/javascript">
        alert('{{ session('success') }}');
    </script>
  @endif 
<div class="content">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6">
          <img src="asset/pharma.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Masukkan Username dan Password.</p>
            </div>
            <form action="" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="email" required name="email" value="{{ session('email') }}" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" required name="password" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>

              
              <button type="submit" class="btn btn-block btn-primary">login</button>
            </form>
              <span class="d-block text-left my-4 text-muted">Not a member? <a href="/register">Register Now</a></span>
          
        </div>
      </div>
    </div>
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
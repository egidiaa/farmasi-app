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
  <title>register</title>
</head>
<div class="content">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6">
          <img src="asset/pharma.jpg" alt="Image" class="img-fluid ">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up</h3>
            </div>
            <form action="" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Your Name</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}" id="username">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group first">
                <label for="email">Your Email</label>
                <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror "  value="{{ old('email') }}" id="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group first">
                <label for="email">Your Phone Number</label>
                <input type="text" name="no_telp" class="form-control  @error('no_telp') is-invalid @enderror "  value="{{ old('no_telp') }}" id="email">
                @error('no_Telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group first">
                <label for="email">Your address</label>
                <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror "  value="{{ old('address') }}" id="email">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">Repeat Your Password</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">I agree all statements in Terms of service</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Register</button>
            </form>
            <span class="d-block text-left my-4 text-muted">Have a member? <a href="/formlogin">Login</a></span>

            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
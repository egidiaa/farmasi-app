<div class="site-navbar py-2">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="/" class="js-logo-clone"><strong class="text-primary">Farmasi</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li id="beranda" ><a href="/">Beranda</a></li>
              <li id="toko"><a href="/shop">Toko</a></li>
              <li id="tentangkami"><a href="/about" style="margin-left: 10px">Tentang Kami</a></li>
              <li id="kontakkami"><a href="/contact" style="margin-left: 10px">Kontak Kami</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  @if (auth()->check())
                  hi {{ auth()->user()->nama }}
                  @else
                  Layanan
                  @endif
                </a>
                <ul class="dropdown-menu" >
                  @if (auth()->check())
                  @if (auth()->user()->level == 'admin')
                  <li><a href="/indexadmin"style="margin-left: 10px">Dashboard</a></li>
                  @else
                  <li><a href="/dashboarduser"style="margin-left: 10px">Dashboard</a></li>
                  @endif
                  <li><a href="/logout"style="margin-left: 10px">Logout</a></li>
                  @else
                  <li><a href="/formlogin"style="margin-left: 10px">Login</a></li>
                  <li><a href="/register"style="margin-left: 10px">Register</a></li>
                  @endif
                </ul>
              </li>
          
        <li id="cart"> 
            <a href="/cart" class="icons-btn d-inline-block">
            <span class="icon-menu"><i class="fa-solid fa-cart-shopping"></i></span>
            </a>
        </li>
            </ul>
          </nav>
        </div>
        <div class="icons">
       
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
            <span class="icon-menu"></span>
        </a>
        </div>
      </div>
    </div>
  </div>


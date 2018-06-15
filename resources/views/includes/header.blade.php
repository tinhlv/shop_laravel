<!--================Top Header Area =================-->
<div class="header_top_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        @include('includes.header_top')
      </div>
      <div class="col-lg-6">
        <div class="top_header_middle">
          <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
          <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="top_right_header">
          <ul class="header_social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
          <ul class="top_right">
            <li class="user"><a href="#"><i class="icon-user icons"></i></a></li>
            <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
            <li class="h_price">
              <select class="selectpicker">
                <option>$0.00</option>
                <option>$0.00</option>
                <option>$0.00</option>
              </select>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================End Top Header Area =================-->
<!--================Menu Area =================-->
<header class="shop_header_area">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav categories">
          <li class="nav-item">
            <select class="selectpicker">
              <option>Categories</option>
              <option>Categories 2</option>
              <option>Categories 3</option>
            </select>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown submenu active">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="index.html">Home Simple</a></li>
              <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
              <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
              <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
              <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
              <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown submenu">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
              <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
              <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
              <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
              <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown submenu">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
              <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
              <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
              <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
              <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
              <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
              <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
              <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
              <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
              <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
              <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
              <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!--================End Menu Area =================-->

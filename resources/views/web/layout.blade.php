<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Green Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/css/animate.css/animate.min.css" rel="stylesheet">
  <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/css/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/css/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.10.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Walking</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/senderos">Senderos</a></li>
          <li><a class="nav-link scrollto " href="/grupo">Grupos</a></li>
          <li><a class="nav-link scrollto" href="/realizadas">Realizadas</a></li>
          @auth 
          <li><a class="nav-link scrollto" href="/profile">Perfil</a></li>
          @else
              <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
              @if (Route::has('register'))
                <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
              @endif
          @endauth

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section id="main" class="section-bg">
        <div class="container">

          <div class="row no-gutters">
                <div class="icon-box">
                  <h4 class="title"><a href="">@yield('titulo')</a></h4>
                </div>
          </div>

          @yield('main')
        </div>
    </section>
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Walking</h3>
      <p>Web de rutas de senderismo</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Walking</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Designed by JJProfe
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/js/glightbox/js/glightbox.min.js"></script>
  <script src="/js/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/js/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>
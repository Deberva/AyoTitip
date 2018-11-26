<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <title>Home</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->


        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

          <link href="css/style.css" rel="stylesheet">
      </head>
<body id="body">
  <header id="header">
    <div class="container">
      @if (Route::has('login'))
      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/home') }}" class="scrollto">Ayo<span>Titip</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @auth
          <li><a href="{{ url('/home') }}" method="GET">Home</a></li>
          @else
          <li><a href="{{route('login')}}" method="GET">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
          @endauth
        </ul>
        @endif
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <section id="intro">

  <div class="intro-content">
    <h2>Nitip Aja <span>Darimana</span> Aja</h2>
  </div>

  <div id="intro-carousel" class="owl-carousel" >
    <div class="item">
      <img src="{{URL::asset('images/background.jpg')}}" alt="">
    </div>
  </div>
</section>
  	<div class="container-fluid">
      <h5 align="center">About US</h5>
      <div class="container-fluid">
        <div class="row">
          <div class="col-3" align="justify">
            Jasa titip barang dilakukan oleh masyarakat luas untuk memperoleh barang atau kebutuhan yang diinginkan.
            Barang yang diinginkan tidak hanya dari daerah lokal dan dari antar kota/provinsi tetapi juga dari luar negeri.
            Pada umumnya masyarakat membutuhkan jasa titip dari seseorang karena waktu yang tidak ada dan jarak yang jauh.
          </div>
          <div class="col-6" align="justify">
            Bedasarkan masalah diatas, maka kami memberikan suatu solusi yaitu membangun sebuah aplikasi Beliin.com berbasis web.
            Tujuannya untuk mempermudah masyarakat dalam memperoleh barang tanpa harus pergi ke tempat secara langsung.
             Aplikasi Beliin.com adalah aplikasi yang penggunanya adalah masyarakat yang ingin menitip barang dan masyarakat
             yang bersedia menerima titipan barang.
          </div>
          <div class="col-3" align="justify">
            Masyarakat yang menitip barang dapat mengirimkan sebuah permintaan dengan mengisi form request dan pengguna aplikasi
            akan melihat setiap permintaan yang masuk ke aplikasi. Masyarakat yang bersedia menerima titipan barang dapat
            menawarkan jasa titip melalui aplikasi dengan mengisi form trip. Masyarakat yang menitip barang dapat juga memilih
            pengguna yang bersedia menerima titipan tanpa harus mengisi form request.
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>IT Del</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
          -->
          Designed by <a href="#">Kelompok 2</a>
        </div>
      </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    </body>
</html>

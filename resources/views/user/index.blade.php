@extends('layouts.app')

@section('content')

<html>
<head>
	<title>index</title>
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body id="body">
<section id="intro">

  <div class="intro-content">
    <h2>Nitip Aja <span>Darimana</span> Aja</h2>
  </div>

  <div id="intro-carousel" class="owl-carousel" >
    <div class="item">
			<img src="{{URL::asset('images/background.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('images/jabat.jpg')}}">
		</div>
  </div>
</section>
<section id="services">
		<div class="container">
			<div>
				<h2 align="center">Lihat Trip Berdasarkan Kota</h2>

					<div class="row">
						@foreach($trip as $trip)
						<div class="col-lg-4">
							<div class="box wow fadeInLeft">
								<div class="icon">
									<img id ="images" src="{{URL::asset('images/background.jpg')}}" alt="">
								</div>
								<br><br><br><br><br><br><br><br><br><br><br><br><br>
								<div>
								<b><a href=""  align="center">{{$trip->nama}}</a></b><br>
									<!-- <b>Tujuan : </b><h6>{{$trip->tujuan}}</h6>
									<b>Tanggal Berangkat : </b><h6>{{$trip->tanggal_pergi}}</h6>
									<b>Tanggal Kembali : </b><h6>{{$trip->tanggal_kembali}}</h6>
									<b>Kecamatan : </b><h6>{{$trip->Kecamatan}}</h6> -->
								</div>
							</div>
						</div>
						@endforeach
					</div>
			</div>
	</section>
	<br><br><br>
	<section id="services">
			<div class="container">
				<div>
					<h2 align="center">Lihat Request Berdasarkan Kota</h2>

						<div class="row">
							@foreach($req as $req)
							<div class="col-lg-4">
								<div class="box wow fadeInLeft">
									<div class="icon">
										<img id ="images" src="{{URL::asset('images/background.jpg')}}" alt="">
									</div>
									<br><br><br><br><br><br>
									<div>
										<b><a href=""  align="center">{{$req->nama}}</a></b><br>
										<!-- <b>Nama Barang : </b><h6>{{$req->nama_barang}}</h6>
										<b>Harga barang : </b><h6>{{$req->harga_barang}}</h6>
										<b id="des">Deskripsi : </b><h6>{{$req->deskripsi}}</h6> -->
									</div>
								</div>
							</div>
							@endforeach
						</div>
				</div>
		</section>
	<br><br><br><br><br>
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
@endsection

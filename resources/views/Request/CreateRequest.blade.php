@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{URL::asset('css/app.css') }}" rel="stylesheet">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
  	<script src="js/jquery-3.3.1.slim.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>Post Trip</title>
  </head>
  <body>
    <div class="container">
  			<h2 id="titip">Formulir Titip</h2>
  			<form action="/formReq" method="POST">
			{{csrf_field()}}

    			<div class="form-group">
      				<label for="nama">Nama : </label>
      				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
    			</div>
    			<div class="form-group">
      				<label for="nama_barang">Nama Barang : </label>
      				<input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
    			</div>
    			<div class="form-group">
      				<label for="harga">Harga Barang : </label>
      				<input type="text" class="form-control" placeholder="Harga Barang" name="harga">
    			</div>
    			<div class="form-group">
      				<label for="deskripsi">Deskripsi Barang : </label>
      				<input id="textarea" type="textbox`" class="form-control" placeholder="Deskripsi Barang" name="deskripsi">
    			</div>
    			<button type="submit" class="btn btn-primary">Request</button>
  			</form>
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
  </body>
</html>
@endsection

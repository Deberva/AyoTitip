@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">

	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
		<table class="table table-striped" border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td colspan="3" align="center">Action</td>
		</tr>
		@foreach($trip as $trip)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$trip->nama}}</td>
			<td><a href=""><button type="button" class="btn btn-primary">View Details</button></a></td>
			<td><a href=""><button type="button" class="btn btn-success">Update</button></a></td>
			<td><form method="POST" action="">
				{{csrf_field()}}

				<input class="btn btn-danger" type="submit" value="delete">
				<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>
    @endforeach
	</table>
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

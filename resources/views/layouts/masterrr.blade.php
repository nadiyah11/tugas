<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Nav -->
				@include('layouts.nav')
			<!-- End Nav -->
			
			<div class="jumbotron">
				{{-- isi --}}
					@yield('isi')
				{{-- Akhir isi --}}
			</div>
			<div class="col-md-13">
			{{-- gambar --}}
				@include('layouts.gambar')
			{{-- End gambar --}}
			</div>
		</div>
	</div>
	<div class="row">
			{{-- col --}}
				@include('layouts.col')
			{{-- End col --}}
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
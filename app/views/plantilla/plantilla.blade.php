<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Plataforma para campañas de Email Marketing.">
	<meta name="author" content="imosaico">
	{{--<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">--}}
	<title>Sento | Email Marketing</title>

	{{-- Bootstrap core CSS --}}
	{{HTML::style('assets/css/bootstrap.css')}}
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>

	@include('plantilla.menu')

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Sento</h1>
			<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			<p><a class="btn btn-primary btn-lg" role="button">Leer más &raquo;</a></p>
		</div>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>

		<hr>
		@include('plantilla.footer')
	</div>

    {{-- Librerias Javacscript --}}
    {{HTML::script('assets/js/jquery.min.js');}}
    {{HTML::script('assets/js/bootstrap.min.js');}}
</body>
</html>

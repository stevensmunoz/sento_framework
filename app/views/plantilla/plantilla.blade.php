<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Plataforma para campañas de Email Marketing.">
	<meta name="author" content="imosaico">
	{{--<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">--}}
	<title>@yield('titulo', 'Sento | Email Marketing')</title>

	{{-- Bootstrap core CSS --}}
	{{HTML::style('assets/css/bootstrap.css')}}
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>

	@include('plantilla.menu')


	<div class="container">
		@yield('contenido')

		<hr>
		@include('plantilla.footer')
	</div>

    {{-- Librerias Javacscript --}}
    {{HTML::script('assets/js/jquery.min.js');}}
    {{HTML::script('assets/js/bootstrap.min.js');}}
</body>
</html>

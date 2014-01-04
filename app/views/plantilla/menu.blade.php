<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Sento</a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Inicio</a></li>
			{{-- Menu publico --}}
			@if(!Auth::check())
				<li><a href="#">¿Qué es Sento?</a></li>
				<li><a href="#">Nuestros Clientes</a></li>
				<li><a href="#">Comprar Licencia</a></li>
			@endif

			{{-- Menu Administrador --}}
			@if(Auth::check() AND Auth::getUser()->id_rol == 1)
				<li><a href="#">Clientes</a></li>
				<li><a href="#">Planes</a></li>
				<li><a href="#">Real time</a></li>
				<li><a href="#">Envios</a></li>
				<li><a href="#">Estadisticas</a></li>
				<li><a href="#">Configuraciónes</a></li>
			@endif

			{{-- Menu Cliente --}}
			@if(Auth::check() AND Auth::getUser()->id_rol == 2)
				<li><a href="#">Crear Envio</a></li>
				<li><a href="#">Bases de datos</a></li>
				<li><a href="#">Estadisticas</a></li>
				<li><a href="#">Configuraciónes</a></li>
				<li><a href="#">Soporte</a></li>
			@endif
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if(!Auth::check())
				<li><a href="#" data-toggle="modal" data-target="#modal_iniciar_sesion">Clientes</a></li>
			@endif
			@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::getUser()->nombre}} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Contraseña</a></li>
						<li class="divider"></li>
						<li>{{HTML::link('/logout', 'Cerrar Sesión')}}</li>

					</ul>
				</li>
			@endif
		</ul>
	</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="modal_iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
			</div>
			<div class="modal-body">
				@include('plantilla.login')
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
			</div>
	</div>
</div>

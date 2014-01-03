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
			<li><a href="#">¿Qué es Sento?</a></li>
			<li><a href="#">Nuestros Clientes</a></li>
			<li><a href="#">Comprar Licencia</a></li>
			<!--<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li class="divider"></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>-->
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" data-toggle="modal" data-target="#modal_iniciar_sesion">Clientes</a></li>
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
				<form role="form">
					<div class="form-group">
						<label for="usuario">Nombre de Usuario</label>
						<input type="email" class="form-control" id="usuario" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Recordarme
						</label>
					</div>
					<a href="#" class="btn btn-link">¿Olvidó su contraseña?</a>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary pull-right">Entrar</button>
			</div>
			</div>
	</div>
</div>

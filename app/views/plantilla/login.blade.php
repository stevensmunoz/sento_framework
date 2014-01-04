				{{ Form::open(array('url' => '/login', 'method' => 'POST','role' => 'form', "autocomplete" => "off"))}}
					<div class="form-group">
						{{HTML::decode(Form::label('nombre_usuario', '<i class="fa fa-user"></i> Nombre de Usuario'));}}
						{{Form::text('nombre_usuario', $value = null, $attributes = array("id" => "nombre_usuario", "class" => "form-control", "placeholder" => "Nombre de Usuario", "requiered"));}}
					</div>
					<div class="form-group">
						{{HTML::decode(Form::label('password', '<i class="fa fa-lock"></i> Contraseña'));}}
						{{Form::password('password', $attributes = array("id" => "nombre_usuario", "class" => "form-control", "requiered"));}}
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Recordarme
						</label>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
					<a href="#">¿Olvidó su contraseña?</a>
				{{ Form::close() }}
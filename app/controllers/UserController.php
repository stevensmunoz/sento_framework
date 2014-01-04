<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// Funcion login, verifica el usuario
	public function login()
	{
		// Obtengo los valores del formulario
		$nombre_usuario = mb_strtolower(trim(Input::get('nombre_usuario')));
		$password = Input::get('password');
		// Declaro las reglas de validacion
		$validator = Validator::make(Input::all(), [
			"nombre_usuario" => "required",
			"password" => "required"
		]);
		// Valido que los datos sean correctos
		if ($validator->passes()) {
			// Si el usuario desea que lo recuerde
			$recordarme = (Input::get('recordarme')) ? TRUE : FALSE;
			if (Auth::attempt(['usuario' => $nombre_usuario, 'password' => $password, 'id_estado' => '1'], $recordarme)){
				// Redirecciona al escritorio si todo esta correcto
				return Redirect::to('/escritorio');
			}else{
				// Lo redirecciona al inicio y saca el mensaje de error
				return Redirect::to('/')->with('msj_error', 'Usuario y/o contraseña incorrectos. Intentelo de nuevo.');
			}
		}else{
			// Si envia datos erronos, como por ejemplo, campos vacios
			return Redirect::to('/')->with('msj_error', 'Por favor Ingrese los datos de inicio de sesión');
		}
	}

}
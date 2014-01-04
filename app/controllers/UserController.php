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

	public function login()
	{
		$nombre_usuario = mb_strtolower(trim(Input::get('nombre_usuario')));
		$password = Input::get('password');

		$validator = Validator::make(Input::all(), [
			"nombre_usuario" => "required",
			"password" => "required"
		]);

		if ($validator->passes()) {
			if (Auth::attempt(['usuario' => $nombre_usuario, 'password' => $password, 'id_estado' => '1'])){
				return Redirect::to('/escritorio');
			}else{
				return Redirect::to('/')->with('msj_error', 'Usuario y/o contraseña incorrectos. Intentelo de nuevo.');
			}
		}else{
			return Redirect::to('/')->with('msj_error', 'Por favor Ingrese los datos de inicio de sesión');
		}

		return View::make('index');
	}

}
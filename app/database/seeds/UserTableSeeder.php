<?php

class UserTableSeeder extends Seeder {

	public function run()
	{		
		DB::table('user_estado')->truncate();
		DB::table('user_rol')->truncate();
		DB::table('user')->truncate();

		// Estado de usuario
		$user_estado = array(
			array("nombre" => "activo"),
			array("nombre" => "inactivo")
		);
		DB::table('user_estado')->insert($user_estado);

		// Rol de usuario
		$user_rol = array(
			array("nombre" => "admin"),
			array("nombre" => "cliente"),
			array("nombre" => "publico")
		);
		DB::table('user_rol')->insert($user_rol);

		$estado_activo  = DB::table('user_estado')->select('id')->where('nombre', 'activo')->first()->id;
		$usuario_admin  = DB::table('user_rol')->select('id')->where('nombre', 'admin')->first()->id;
		$usuario_cliente  = DB::table('user_rol')->select('id')->where('nombre', 'cliente')->first()->id;

		// Usuario		
		$user = array(
			array(
				"nombre" => "Administrador", 
				"usuario" => "admin", 
				"password" => Hash::make('imosaico2014'), 
				"email" => "stiven@imosai.co", 
				"id_estado" => $estado_activo,
				"id_rol" => $usuario_admin),
			array(
				"nombre" => "Cliente Prueba", 
				"usuario" => "cliente", 
				"password" => Hash::make('imosaico2014'), 
				"email" => "contacto@imosai.co", 
				"id_estado" => $estado_activo,
				"id_rol" => $usuario_cliente)
		);		
		DB::table('user')->insert($user);
	}

}

<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Estado de usuario
		DB::table('user_estado')->truncate();
		DB::table('user')->truncate();

		$user_estado = array(
			array("nombre" => "activo"),
			array("nombre" => "inactivo")
		);
		DB::table('user_estado')->insert($user_estado);

		$estado_activo  = DB::table('user_estado')
			->select('id')
			->where('nombre', 'activo')
			->first()
			->id;

		// Usuario
		
		$user = array(
			array("nombre" => "Administrador", "usuario" => "admin", "password" => Hash::make('imosaico2014'), "email" => "stiven@imosai.co", "id_estado" => $estado_activo)
		);		
		DB::table('user')->insert($user);
	}

}

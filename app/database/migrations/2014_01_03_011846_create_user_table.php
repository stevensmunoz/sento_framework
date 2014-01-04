<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* Tabla estado de usuario */
		Schema::create('user_estado', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->timestamps();
		});

		/* Tabla rol de usuario */
		Schema::create('user_rol', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->timestamps();
		});

		/* Usuario del sistema */
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('usuario');
			$table->string('password');
			$table->string('email');
			$table->integer('id_estado')->unsigned();
			$table->foreign('id_estado')->references('id')->on('user_estado') ->onDelete('cascade');

			$table->integer('id_rol')->unsigned();
			$table->foreign('id_rol')->references('id')->on('user_rol') ->onDelete('cascade');
			$table->dateTime('ultimo_acceso')->nullable()->default(null);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('user');
		Schema::dropIfExists('user_estado');
		Schema::dropIfExists('user_rol');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProviders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_providers', function(Blueprint $table)
		{
			$table->increments('id');
			//Referencia a la tabla de usuarios
			$table->integer->('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			//Nombre del proveedor Ex. google, github, facebook, twitter.
			$table->string('provider');
			// ID propio del proveedor
			$table->string('provider_id')->unique();
			//Token de autorizacion OAuth 2.0
			$table->string('token')->unique()->nullable();
			//Email del usuario asociado al proveedor
			$table->string('email')->nullable();
			//Username del usuario en el proveedor (si es que existe)
			$table->string('username')->nullable();
			//Avatar del usuario en el proveedor
			$table->string('avatar');
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
		Schema::drop('user_providers');
	}

}

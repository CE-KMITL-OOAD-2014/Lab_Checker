<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user',function($table)
		{
			$table->string('id');
			$table->string('password');
			$table->string('name');
			$table->string('surname');
			$table->string('email');
			$table->tinyinteger('status');
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->string('remember_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}

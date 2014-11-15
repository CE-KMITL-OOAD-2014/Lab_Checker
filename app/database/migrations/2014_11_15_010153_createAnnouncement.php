<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncement extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('announcement',function($table)
		{
			$table->increments('id');
			$table->string('topic');
			$table->string('detail');
			$table->time('time');
			$table->string('id_user');
			$table->time('created_at');
			$table->time('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('announcement');
	}

}

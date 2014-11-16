<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subject',function($table)
		{
			$table->increments('id');
			$table->string('name_subject');
			$table->string('time_subject');
			$table->string('day_subject');
			$table->string('room_subject');
			$table->string('id_user');
			$table->string('permission');
			$table->string('path_file');
			$table->string('detail_subject');
			$table->integer('numStudent');
			$table->datetime('created_at');
			$table->datetime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subject');
	}
}

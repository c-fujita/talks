<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('nickname');
			$table->integer('course_id')->default(1);
			$table->integer('lesson_id')->default(1);
			$table->integer('chapter_id')->default(0);
			$table->dateTime('last_login_at')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->integer('role_id')->default(0);
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}

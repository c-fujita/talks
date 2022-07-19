<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masters', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('role_id')->unsigned()->nullable()->index('masters_role_id_foreign');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('avatar')->nullable()->default('users/default.png');
			$table->string('password')->nullable();
			$table->string('remember_token')->nullable();
			$table->text('settings')->nullable();
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
		Schema::drop('masters');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('references', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('customer_id')->unsigned()->nullable()->index('references_customer_id_foreign');
			$table->string('user_name');
			$table->string('title');
			$table->string('body');
			$table->string('tag');
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
		Schema::drop('references');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRepliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('replies', function(Blueprint $table)
		{
			$table->foreign('customer_id')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('reference_id')->references('id')->on('references')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('replies', function(Blueprint $table)
		{
			$table->dropForeign('replies_customer_id_foreign');
			$table->dropForeign('replies_reference_id_foreign');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Replies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reference_id')->unsigned();
            $table->foreign('reference_id')->references('id')->on('references');
            $table->string('user_name')->unsigned();
            $table->foreign('user_name')->references('name')->on('customers');
            $table->string('title');
            $table->string('body');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('replies');
    }
}

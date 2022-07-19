<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('chapter_id');
			$table->integer('course_id')->default(1);
			$table->string('course_name')->nullable();
			$table->integer('lesson_id')->default(1);
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->string('slug');
			$table->integer('author_id');
			$table->text('meta_description')->nullable();
			$table->text('meta_keywords')->nullable();
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->boolean('featured')->default(0);
			$table->text('body');
			$table->timestamps(10);
			$table->text('excerpt')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}

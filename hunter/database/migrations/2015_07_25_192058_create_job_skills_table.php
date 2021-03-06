<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_skills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_id')->unsigned()->index();
			$table->string('name',255);
			$table->longText('description');
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
		Schema::drop('job_skills');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('email');
			$table->string('phone');
			$table->string('image');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('department_id')->unsigned();
			$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
		Schema::drop('employees');
	}

}

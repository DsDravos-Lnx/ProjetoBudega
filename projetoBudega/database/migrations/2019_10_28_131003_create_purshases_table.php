<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurshasesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('purshases', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->integer('amount');
			$table->float('price', 8, 2);
			$table->boolean('credited');

			$table->unsignedBigInteger('client_id')->nullable();
			$table->unsignedBigInteger('product_id')->nullable();

			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

			$table->unsignedBigInteger('created_by')->nullable();
			$table->unsignedBigInteger('update_by')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('purshases');
	}
}

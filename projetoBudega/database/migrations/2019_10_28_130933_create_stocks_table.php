<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('stocks', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->int('amount');
			$table->string('type');

			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products');
			$table->unsignedBigInteger('supplier_id');
			$table->foreign('supplier_id')->references('id')->on('suppliers');

			$table->unsignedBigInteger('created_by');
			$table->unsignedBigInteger('update_by');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('stocks');
	}
}

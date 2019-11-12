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

			$table->integer('amount');
			$table->string('type');

			$table->unsignedBigInteger('product_id')->nullable();
			$table->unsignedBigInteger('supplier_id')->nullable();
			
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');

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
		Schema::dropIfExists('stocks');
	}
}

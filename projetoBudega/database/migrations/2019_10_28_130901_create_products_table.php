<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->float('price', 8, 2);
            $table->boolean('available');

            $table->unsignedBigInteger('stock_id');

            $table->foreign('stock_id')->references('id')->on('stocks');
            
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
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

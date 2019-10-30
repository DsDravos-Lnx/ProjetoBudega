<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditedPayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credited_pay', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('credited');

            $table->unsignedBigInteger('purshase_id');
            $table->foreign('purshase_id')->references('id')->on('purshases');

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
        Schema::dropIfExists('credited_pay');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentOptionCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_option__countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iso');
            $table->foreign('iso')->references('iso')->on('countries');
            $table->string('payment_option');
            $table->foreign('payment_option')->references('name')->on('payment_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_option__country');
    }
}

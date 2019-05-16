<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentOptionCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_option__countries', function (Blueprint $table) {
            $table->string('payment_option');
            $table->string('iso');
            $table->primary(['payment_option','iso']);
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
        Schema::dropIfExists('payment_option__countries');
    }
}

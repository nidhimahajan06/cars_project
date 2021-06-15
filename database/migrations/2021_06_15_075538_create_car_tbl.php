<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_info', function (Blueprint $table) {
            $table->id();
            $table->mediumText('image')->nullable();
            $table->string('brand');
            $table->string('price');
            $table->string('description');
            $table->string('mileage');
            $table->string('seats');
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
        Schema::dropIfExists('cars_info');
    }
}

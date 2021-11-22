<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_year', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('car_brand', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('car_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->integer('year_id');
            $table->integer('type_id');
            $table->integer('brand_id');
            $table->string('description');
            $table->string('additions');
            $table->decimal('price');
            $table->string('color');
            $table->integer('doors');
            $table->integer('seats');
            $table->softDeletes();
        });

        Schema::create('carImages', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->integer('car_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carImages');
    }
}

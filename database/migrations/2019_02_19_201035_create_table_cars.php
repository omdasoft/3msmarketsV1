<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('sub_cat');
            $table->string('ads_type');
            $table->string('condition');
            $table->integer('company_id');
            $table->integer('mark_id');
            $table->string('car_type');
            $table->string('fuel_type');
            $table->string('gear_type');
            $table->string('manufacture_date');
            $table->integer('distance');
            $table->string('color');
            $table->string('license');
            $table->string('body');
            $table->integer('city_id');
            $table->string('location_id')->nullable();
            $table->string('mechanical_state');
            $table->string('chassis_num');
            $table->string('desc');
            $table->string('images');
            $table->string('cylinders');
            $table->string('doors');
            $table->string('price');
            $table->string('title');
            $table->integer('duration');
            $table->boolean('status')->default(0);
            $table->integer('user_id');
            $table->integer('product_id');
            $table->date('activation_date')->nullable();
            $table->date('end_date')->nullable();
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
        //
    }
}

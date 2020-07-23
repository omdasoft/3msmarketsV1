<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->string('sub_cat');
            $table->string('table_name');
            $table->boolean('status');
            $table->string('price');
            $table->string('advertiser');
            $table->integer('advertiser_id');
            $table->integer('product_id');
            $table->integer('duration');
            $table->float('total');
            $table->integer('views');
            $table->date('date');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
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
            $table->string('name');
            $table->integer('year');
            $table->double('price')->nullable();
            $table->string('body_style');
            $table->float('engine')->nullable();
            $table->string('transmission');
            $table->string('color')->nullable();
            $table->string('fuel_style');
            $table->integer('category_id')->unsigned();
            $table->longText('image')->nullable();
            $table->longText('description')->nullable();
    
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
        Schema::dropIfExists('cars');
    }
}

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
        Schema::dropIfExists('cars');
         Schema::create('cars', function (Blueprint $table) 
            {
                $table->increments('id');
                $table->string('name');
                $table->string('location');
                $table->double('lat');
                $table->double('lng');
                $table->integer('Avaliable');
                $table->boolean('is_admin');
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
    }
}

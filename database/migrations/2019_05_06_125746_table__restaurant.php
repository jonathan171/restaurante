<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('table_restaurant', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre');
            $table-> string('direccion');
            $table-> float('ponderacion');
            $table->string('Telefono');
            $table->string('logo');
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
        Schema::dropIfExists('table_restaurant');
    }
}

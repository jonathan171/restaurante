<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionComida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('descripcion_comida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table-> string('precio');
            $table-> string('ingredientes');
            $table->string('imagen');
            $table->unsignedInteger('tipo_id'); 
            $table->unsignedInteger('restaurant_id'); 
            $table->foreign('tipo_id')->references('id')->on('tipo_comidas');
            $table->foreign('restaurant_id')->references('id')->on('table_restaurant');
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
        Schema::dropIfExists('descripcion_comida');
    }
}

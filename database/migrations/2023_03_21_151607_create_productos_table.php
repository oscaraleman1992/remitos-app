<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero');
            $table->string('rack');
            $table->string('cable');
            $table->unsinedBigInterger('receptor_id');
            $table->foreign('receptor_id')->references('id')->on('receptores')->onDelete('cascade');//se va a borrar todo en la tabla producto si se borra la relacion que se encunetra en la tabla receptor
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}

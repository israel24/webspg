<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('subareas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('area_id')->unsigned();
                $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
                $table->string('nombre_subarea');
                $table->text('descripcion');
                $table->boolean('estado');
                $table->date('fecha_creacion');

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
        Schema::drop('subareas');
    }

}

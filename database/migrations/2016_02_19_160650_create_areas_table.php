<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('areas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre_area');
                $table->boolean('estado');
                $table->text('descripcion');
                $table->integer('codigo');
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
        Schema::drop('areas');
    }

}

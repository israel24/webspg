<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutoridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('autoridads', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
$table->integer('codigo');
$table->string('cargo');
$table->date('fecha_Inicio');
$table->date('fecha_fin');
$table->boolean('estado');

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
        Schema::drop('autoridads');
    }

}

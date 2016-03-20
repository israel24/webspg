<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('docentes', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
$table->integer('codigo');
$table->integer('CI');
$table->string('direcion');
$table->integer('telefono');
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
        Schema::drop('docentes');
    }

}

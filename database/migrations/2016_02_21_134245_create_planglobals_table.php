<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanglobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('planglobals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('materium_id')->unsigned();
                $table->foreign('materium_id')->references('id')->on('materias')->onDelete('cascade');
                $table->string('nombre_plan_global');
                $table->string('sigla_plan_global');
                $table->boolean('estado');
                $table->integer('codigo');
                

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
        Schema::drop('planglobals');
    }

}

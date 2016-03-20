<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('grupos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('materium_id')->unsigned();
                $table->foreign('materium_id')->references('id')->on('materias')->onDelete('cascade');

                $table->integer('docente_id')->unsigned();
                $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
                
                $table->integer('grupo');
                $table->boolean('control_de_plan_global');

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
        Schema::drop('grupos');
    }

}

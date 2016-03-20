<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('materias', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('departamento_id')->unsigned();
                $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
                $table->string('nombre_materia');
                $table->string('sigla_materia');
                $table->integer('codigo');
                 $table->date('fecha_creacion');

                $table->timestamps();
            });
            
            
        Schema::create('materia_carrera', function (Blueprint $table) {
            $table->integer('carrera_id')->unsigned();
            $table->integer('materium_id')->unsigned();

            $table->foreign('carrera_id')->references('id')->on('carreras')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materium_id')->references('id')->on('materias')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['carrera_id', 'materium_id']);
        });


        Schema::create('materia_sub_area', function (Blueprint $table) {
            $table->integer('sub_area_id')->unsigned();
            $table->integer('materium_id')->unsigned();

            $table->foreign('sub_area_id')->references('id')->on('subareas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materium_id')->references('id')->on('materias')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['sub_area_id', 'materium_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::drop('materia_sub_area');
        Schema::drop('materia_carrera');
        Schema::drop('materias');
    }

}

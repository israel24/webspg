<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('unidades', function(Blueprint $table) {
               $table->increments('id');
                $table->integer('plan_global_id')->unsigned();
                $table->foreign('plan_global_id')->references('id')->on('planglobals')->onDelete('cascade');
                $table->string('nombre_de_la_unidad');
$table->integer('duracion_de_la_unidad_en_periodos_academicos');
$table->text('objetivo_de_la_unidad');
$table->text('contenido_de_la_unidad');
$table->text('tecnicas_predominantes_propuestas_para_la_unidad');
$table->text('evaluacion_de_la_unidad');
$table->text('bibliografia_especifica_de_la_unidad');

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
        Schema::drop('unidades');
    }

}

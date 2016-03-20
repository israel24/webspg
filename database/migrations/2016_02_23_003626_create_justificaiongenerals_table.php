<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJustificaiongeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('justificaiongenerals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('plan_global_id')->unsigned();
                $table->foreign('plan_global_id')->references('id')->on('planglobals')->onDelete('cascade');
                $table->text('razon_de_ser_la_asignatura');
               $table->text('por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios');
               $table->text('en_que_medida_contribuye_a_la_formacion_integral_del_profesional');

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
        Schema::drop('justificaiongenerals');
    }

}

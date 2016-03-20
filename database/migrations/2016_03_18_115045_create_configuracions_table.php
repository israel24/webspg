<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('configuracions', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
$table->boolean('estado');
$table->string('logo');
$table->string('facultad');
$table->string('organigrama');
$table->string('imgenuno');
$table->string('imgendos');
$table->string('imgentres');
$table->string('imgencuatro');
$table->string('imgencinco');

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
        Schema::drop('configuracions');
    }

}

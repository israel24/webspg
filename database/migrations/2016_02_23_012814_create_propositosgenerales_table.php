<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropositosgeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('propositosgenerales', function(Blueprint $table) {
                $table->integer('plan_global_id')->unsigned();
                $table->foreign('plan_global_id')->references('id')->on('planglobals')->onDelete('cascade');
                $table->increments('id');
                $table->text('propositos_generales');

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
        Schema::drop('propositosgenerales');
    }

}

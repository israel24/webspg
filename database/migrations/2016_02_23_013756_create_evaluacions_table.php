<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('evaluacions', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('plan_global_id')->unsigned();
                $table->foreign('plan_global_id')->references('id')->on('planglobals')->onDelete('cascade');
                $table->text('evaluacion');

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
        Schema::drop('evaluacions');
    }

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('layout_step_heading', 100);
            $table->string('layout_step_description')->nullable();
            $table->integer('layout_id')->unsigned()->index();

            $table->foreign('layout_id')
                    ->references('id')
                    ->on('layouts')
                    ->onDelete('cascade');
                    
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
        Schema::drop('layout_steps');
    }
}

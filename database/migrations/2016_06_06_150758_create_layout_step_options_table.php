<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutStepOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_step_options', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('option_id')->unsigned();
            $table->integer('layout_step_id')->unsigned()->index();


            $table->foreign('option_id')
                    ->references('id')
                    ->on('options');

            $table->foreign('layout_step_id')
                    ->references('id')
                    ->on('layout_steps')
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
        Schema::drop('layout_step_options');
    }
}

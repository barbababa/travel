<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('option_name');
            $table->boolean('isRequired')->default(false);
            $table->integer('option_set_id')->unsigned()->index();
            $table->integer('option_group_id')->unsigned()->index();

            $table->foreign('option_set_id')
                    ->references('id')
                    ->on('option_sets');

            $table->foreign('option_group_id')
                    ->references('id')
                    ->on('option_groups')
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
        Schema::drop('options');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterlensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filterlens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('lab_id');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::drop('filterlens');
    }
}

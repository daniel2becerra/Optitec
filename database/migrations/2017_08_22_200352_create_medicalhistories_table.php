<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('reasonconsultation');
            $table->string('odwithcorrection');
            $table->string('oiwithcorrection');
            $table->string('aowithcorrection');
            $table->string('odwithoutcorrection');
            $table->string('oiwithoutcorrection');
            $table->string('aowithoutcorrection');
            $table->string('odRx');
            $table->string('oiRx');
            $table->string('addRx');
            $table->string('typeLen');
            $table->string('odEE');
            $table->string('oiEE');
            $table->string('covertest');
            $table->string('ppm');
            $table->string('ductions');
            $table->string('versions');
            $table->string('odfondo');
            $table->string('oifondo');
            $table->string('odQ');
            $table->string('oiQ');
            $table->string('odR');
            $table->string('oiR');
            $table->string('odS');
            $table->string('oiS');
            $table->string('prescription');
            $table->string('odRxF');
            $table->string('avOdRxF');
            $table->string('oiRxF');
            $table->string('avOiRxF');
            $table->string('addRxF');
            $table->string('DPRxF');
            $table->string('MaterialRxF');
            $table->string('typeLenRxF');
            $table->string('filterRxF');
            $table->string('observationRxF');
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
        Schema::drop('medicalhistories');
    }
}

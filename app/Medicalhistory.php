<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Medicalhistory extends Model
{
    protected $table = 'medicalhistories';
	protected $fillable = ['client_id', 'reasonconsultation', 'odwithcorrection', 'oiwithcorrection', 'aowithcorrection', 'odwithoutcorrection', 'oiwithoutcorrection', 'aowithoutcorrection', 'odRx', 'oiRx', 'addRx', 'typeLen', 'odEE', 'oiEE', 'covertest', 'ppm', 'ductions', 'versions', 'odfondo', 'oifondo', 'odQ', 'oiQ', 'odR', 'oiR', 'odS', 'oiS', 'prescription', 'odRxF', 'avOdRxF', 'oiRxF', 'avOiRxF', 'addRxF', 'DPRxF', 'MaterialRxF', 'typeLenRxF', 'filterRxF', 'obsertationRxF'];
}

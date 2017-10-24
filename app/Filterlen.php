<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Filterlen extends Model
{
    protected $table = 'filterlens';
	protected $fillable = ['name', 'lab_id'];

	public function lab()
    {
        return $this->belongsTo('Optitec\Lab');
    }
}

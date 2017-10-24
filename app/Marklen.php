<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Marklen extends Model
{
    protected $table = 'marklens';
	protected $fillable = ['name', 'typelen_id'];

    public function materialmarkprices()
    {
        return $this->hasMany('Optitec\materialmarkprice');
    }

    public function typelen()
    {
        return $this->belongsTo('Optitec\Typelen');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function($marklen)
        {
            $marklen->materialmarkprices()->delete();
        });
    }
}



<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Typelen extends Model
{
    protected $table = 'typelens';
	protected $fillable = ['name', 'lab_id'];

	public function materiallens()
    {
        return $this->hasMany('Optitec\Materiallen');
    }

    public function marklens()
    {
        return $this->hasMany('Optitec\Marklen');
    }

    public function lab()
    {
        return $this->belongsTo('Optitec\Lab');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function($typelen)
        {   
            
            $typelen->marklens->each(
                function($marklens)
                {
                    $marklens->delete();
                });
            $typelen->materiallens->each(
                function($materiallens)
                {
                    $materiallens->delete();
                });
        });
    }
}

<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $table = 'labs';
	protected $fillable = ['name', 'address', 'phone', 'contactName', 'contactPhone'];

	public function filterlens()
    {
        return $this->hasMany('Optitec\Filterlen');
    }

    public function typelens()
    {
        return $this->hasMany('Optitec\Typelen');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($lab)
        {
            $lab->typelens->each(
                function($typelens)
                {
                    $typelens->delete();
                }); 
            $lab->filterlens()->delete();
        });
    }

}

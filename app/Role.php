<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
	protected $fillable = ['name'];

	public function users()
    {
        return $this->hasMany('Optitec\Users');
    }
}

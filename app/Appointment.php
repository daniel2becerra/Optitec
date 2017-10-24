<?php

namespace Optitec;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'title', 'phone','start', 'end', 'color'
    ];
}

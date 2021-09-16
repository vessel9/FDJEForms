<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionJefeHogar extends Model
{
    protected $fillable = [
        'situacion'
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Paciente');
    }
}

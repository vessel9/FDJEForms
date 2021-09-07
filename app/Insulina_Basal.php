<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsulinaBasal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    //Relación 1 - N
    public function paciente_insulina_basal()
    {
        return $this->belongsToMany('App\Models\Paciente');
    }
}

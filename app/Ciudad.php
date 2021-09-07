<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    //Relacion 1 - N (inversa)
    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    //Relacion 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Models\Paciente');
    }
}

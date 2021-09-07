<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayudas_Fundacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_ayuda'
    ];

    //Relación N - N
    public function paciente()
    {
        return $this->belongsToMany('App/Models/Paciente');
    }
}

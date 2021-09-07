<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsulinaPrandial extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->belongsToMany('App\Models\Paciente');
    }
}

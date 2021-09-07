<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemaDiabetes extends Model
{
    use HasFactory;
    protected $fillable = [
        'problema',
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Models\Paciente');
    }
}

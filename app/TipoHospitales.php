<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHospitales extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_diabetes',
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Models\Paciente');
    }
}

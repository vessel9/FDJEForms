<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    //Relación 1 - N
    public function ciudad()
    {
        return $this->hasMany('App\Models\Ciudad');
    }
}

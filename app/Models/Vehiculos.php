<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $tabla ='vehiculos';

    protected $fillable = ['propietario_id','placa','marca','tipo'];

    public $timestamps = true;


    public function scopePlaca($query, $placa){
        if ($placa) {
            return $query -> where('placa','like',"%$placa%");
        }
    }

    public function scopeMarca($query, $marca){
        if ($marca) {
            return $query -> where('marca','like',"%$marca%");
        }
    }
}

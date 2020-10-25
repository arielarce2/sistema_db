<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    protected $tabla ='propietarios';

    protected $fillable = ['cedula','nombre','apellido','edad'];

    public $timestamps = true;


    public function scopeCedula($query, $cedula){
        if ($cedula) {
            return $query -> where('cedula','like',"%$cedula%");
        }
    }

    public function scopeNombre($query, $nombre){
        if ($nombre) {
            return $query -> where('nombre','like',"%$nombre%");
        }
    }
}

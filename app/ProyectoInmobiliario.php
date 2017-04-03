<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoInmobiliario extends Model
{
    //
    protected $fillable = [
      'nombreProyecto', 'tipoInmueble', 'ubicacion', 'descripcion'
    ];
}

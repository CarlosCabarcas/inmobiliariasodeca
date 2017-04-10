<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoInmobiliario extends Model
{
    //
    protected $fillable = [
      'nombreProyecto', 'tipoInmueble', 'ubicacion', 'descripcion', 'caracteristicas'
      ,'imagen_principal', 'latitud', 'longitud'
    ];

    public function imagenes()
    {
      return $this->hasMany('App\Imagen','proyectoFk','id');
    }
}

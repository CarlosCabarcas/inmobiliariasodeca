<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $fillable = [
    'ruta', 'nombreImagen', 'proyectoFk', 'descripcionImagen'
  ];

  public static function imagenes($id)
  {
    return Imagen::where('proyectoFk','=',$id)->get();

  }
}

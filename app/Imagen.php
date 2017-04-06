<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $fillable = [
    'ruta', 'nombreImagen', 'proyectoFk'
  ];

  public static function imagenes($id)
  {
    return Imagen::where('proyectoFk','=',$id)->get();

  }
}

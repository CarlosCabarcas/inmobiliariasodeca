<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

use App\ProyectoInmobiliario;

use App\Imagen;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crear_proyecto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function mostrar()
    {
      $proyectos = ProyectoInmobiliario::all();
      return view('proyectos') -> with(['proyectos' => $proyectos]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $datos = array(
        'nombreProyecto' => $request->nombre,
        'tipoInmueble' => $request->categoria,
        'descripcion' => nl2br($request->descripcion)
      );
      $proyecto = new ProyectoInmobiliario($datos);
      $proyecto->save();

      //foreach ($datos as $data) {
      if($request->file('imagen1')){
        $imagen = 'imagen1';
        $this->guardarImagen($request, $proyecto->id, $imagen);
      }
      if($request->file('imagen2')){
        $imagen = 'imagen2';
        $this->guardarImagen($request, $proyecto->id, $imagen);
      }
      if($request->file('imagen3')){
        $imagen = 'imagen3';
        $this->guardarImagen($request, $proyecto->id, $imagen);
      }
      if($request->file('imagen4')){
        $imagen = 'imagen4';
        $this->guardarImagen($request, $proyecto->id, $imagen);
      }
      //}

      return redirect()->route('create_proyecto');
      //o
      //return back();
    }

    public function guardarImagen($request, $id, $imagen){
      $image = new Imagen();

      $image->proyectoFk = $id;

      $img = $request->file($imagen);
      $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

      storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));
      $image->ruta = $file_rout;//ruta nombre de campo en bd



      $image->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

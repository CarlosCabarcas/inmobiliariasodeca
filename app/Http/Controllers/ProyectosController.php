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
        'descripcion' => $request->descripcion
      );
      $proyecto = new ProyectoInmobiliario($datos);
      $proyecto->save();

      //foreach ($datos as $data) {
        $this->guardarImagen($request, $proyecto->id);
      //}

      return redirect()->route('create_proyecto');
      //o
      //return back();
    }

    public function guardarImagen($request, $id){
      $proyect = new Imagen();

      $proyect->proyectoFk = $id;

      $img = $request->file('imagen');
      $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

      storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));
      $proyect->ruta = $file_rout;//ruta nombre de campo en bd



      $proyect->save();
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

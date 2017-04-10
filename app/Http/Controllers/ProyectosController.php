<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\ProyectoInmobiliario;
use App\Imagen;
use DB;


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

    public function listarProyectos(){
      $proyectos = ProyectoInmobiliario::paginate(3);

      return view('listar_proyectos', compact('proyectos'));
    }

    public function mostrarProyectosEdit($id){
      $editar = ProyectoInmobiliario::where('id', '=', $id)->get();

      return view('editar_proyecto', compact('editar'));
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
      return view('proyectos', compact('proyectos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('imagen-principal');
        $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

        storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));

        $datos = array(
          'nombreProyecto' => $request->nombre,
          'tipoInmueble' => $request->categoria,
          'descripcion' => nl2br($request->descripcion),
          'caracteristicas' => $request->caracteristicas,
          'imagen_principal' => $file_rout,
          'latitud' => $request->lat,
          'longitud' => $request->lng
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

      return redirect()->route('listar_proyecto');
      //o
      //return back();
    }

    public function guardarImagen($request, $id, $imagen){
      $image = new Imagen();

      $image->proyectoFk = $id;

      $img = $request->file($imagen);
      $image->nombreImagen = $img -> getClientOriginalName();
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
        $proyect = ProyectoInmobiliario::findOrFail($id);

        $img = $request->file('imagen-principal');
        $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

        storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));

        $request = array(
          'nombreProyecto' => $request->nombre,
          'tipoInmueble' => $request->categoria,
          'descripcion' => $request->descripcion,
          'caracteristicas' => $request->caracteristicas,
          'imagen_principal' => $file_rout,
          'latitud' => $request->lat,
          'longitud' => $request->lng
        );

        $id_proyect = $proyect->id;
        $proyect->fill($request);
        $proyect->save();
        return redirect()->route('listar_proyecto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = ProyectoInmobiliario::findOrFail($id);

        $eliminar = $proyecto->delete();

        return redirect()->route('listar_proyecto');
    }
}

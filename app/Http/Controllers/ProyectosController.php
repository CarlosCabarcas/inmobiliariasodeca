<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\ProyectoInmobiliario;
use App\Imagen;
use DB;

use App\Http\Requests\ProyectosRequest;

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

    public function inicio()
    {
      return view('index');
    }

    public function sobrenosotros()
    {
      return redirect('nosotros');
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
    public function store(ProyectosRequest $request)
    {
        $img = $request->file('imagen-principal');
        $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

        storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));

        $datos = array(
          'nombreProyecto' => $request->nombre,
          'tipoInmueble' => $request->categoria,
          'descripcion' => $request->descripcion,
          'caracteristicas' => nl2br($request->caracteristicas),
          'imagen_principal' => $file_rout,
          'latitud' => $request->lat,
          'longitud' => $request->lng
        );
      $proyecto = new ProyectoInmobiliario($datos);
      $proyecto->save();

      //foreach ($datos as $data) {
      if($request->file('imagen1')){
        $imagen = 'imagen1';
        $nombre = 'nombreImagen1';
        $descripcion = 'descripcionImagen1';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen2')){
        $imagen = 'imagen2';
        $nombre = 'nombreImagen2';
        $descripcion = 'descripcionImagen2';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen3')){
        $imagen = 'imagen3';
        $nombre = 'nombreImagen3';
        $descripcion = 'descripcionImagen3';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen4')){
        $imagen = 'imagen4';
        $nombre = 'nombreImagen4';
        $descripcion = 'descripcionImagen4';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen5')){
        $imagen = 'imagen5';
        $nombre = 'nombreImagen5';
        $descripcion = 'descripcionImagen5';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen6')){
        $imagen = 'imagen6';
        $nombre = 'nombreImagen6';
        $descripcion = 'descripcionImagen6';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen7')){
        $imagen = 'imagen7';
        $nombre = 'nombreImagen7';
        $descripcion = 'descripcionImagen7';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen8')){
        $imagen = 'imagen8';
        $nombre = 'nombreImagen8';
        $descripcion = 'descripcionImagen8';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen9')){
        $imagen = 'imagen9';
        $nombre = 'nombreImagen9';
        $descripcion = 'descripcionImagen9';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      if($request->file('imagen10')){
        $imagen = 'imagen10';
        $nombre = 'nombreImagen10';
        $descripcion = 'descripcionImagen10';
        $this->guardarImagen($request, $proyecto->id, $imagen, $nombre, $descripcion);
      }
      //}

      return redirect()->route('listar_proyecto');
      //o
      //return back();
    }

    public function guardarImagen(Request $request, $id, $imagen, $nombre, $descripcion){
      $image = new Imagen();

      $image->proyectoFk = $id;

      $img = $request->file($imagen);
      $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

      storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));
      $image->nombreImagen = $request->$nombre;
      $image->descripcionImagen = $request->$descripcion;
      $image->ruta = $file_rout;//rutImagena nombre de campo en bd



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
        /*$img = $request->file('imagen-principal');
        $file_rout = time().'_'.$img->getClientOriginalName(); //metodo time() guarda la hora de unix

        storage::disk('imgProyectos')->put($file_rout, file_get_contents($img->getRealPath()));
        */
        $request = array(
          'nombreProyecto' => $request->nombre,
          'tipoInmueble' => $request->categoria,
          'descripcion' => $request->descripcion,
          'caracteristicas' => $request->caracteristicas,
          //'imagen_principal' => $file_rout,
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

@extends('layout_admin')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Inmobiliaria Sodeca <small>AGREGAR PROYECTO</small></h1>
  <form class="" action="{{route('save_proyecto')}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="nombre">Nombre del proyecto</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del proyecto">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea rows="3" class="form-control"  name="descripcion" placeholder="Descripción del proyecto"></textarea>
      </div>

      <div class="form-group">
        <label for="caracteristicas">Características</label>
        <textarea rows="3" class="form-control"  name="caracteristicas" placeholder="Características del proyecto"></textarea>
      </div>

      <div class="form-group">
        <label for="imagen-principal">Imagen principal</label>
        <input type="file" name="imagen-principal" value="" multiple="true" data-preview-file-type="any">
      </div>
      <div class="form-group">
        <label for="imagen">Imagenes</label>
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen1">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen2">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen3">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen4">
      </div>

      <div class="col-md-6 ">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="categoria">Tipo de Inmueble</label>
        <select class="form-control" name="categoria">
          <option value="">Seleccione un tipo de inmueble</option>
          <option value="Casa">Casa</option>
          <option value="Apartamento">Apartamento</option>
          <option value="Casa finca">Casa finca</option>
          <option value="Finca">Finca</option>
          <option value="Oficina">Oficina</option>
        </select>
      </div>
      <div class="form-group">
        <label for="ubicacion">Ubicación</label>
        <input type="text" class="form-control" name="" placeholder="">
      </div>
    </div>

  </form>

</div>

@endsection

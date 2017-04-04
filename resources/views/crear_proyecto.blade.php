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
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea rows="3" class="form-control"  name="descripcion" placeholder="Descripción del producto"></textarea>
      </div>

      <div class="form-group">
        <label for="imagen">Imagen</label>
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen">
      </div>

      <div class="col-md-6 ">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="categoria">Tipo de Inmueble</label>
        <select class="form-control" name="categoria">
          <option value="casa">casa</option>
          <option value="apartamento">apartamento</option>
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

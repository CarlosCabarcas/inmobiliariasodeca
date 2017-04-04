@extends('layout_admin')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Inmobiliaria Sodeca <small>AGREGAR PROYECTO</small></h1>
  <form class="" action="" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control" name="imagen" placeholder="inserte URL de la imagen">
      </div>

      <div class="col-md-6 ">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="categoria">Tipo de Inmueble</label>
        <select class="form-control" name="categoria">
          <option value=""></option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-group">
        <label for="imagen">Ubicación</label>
        <input type="text" class="form-control" name="imagen" placeholder="inserte URL de la imagen">
      </div>
    </div>

  </form>

</div>

@endsection

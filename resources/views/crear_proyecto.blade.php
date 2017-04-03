@extends('layout_admin')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">BiciUnicor <small>CREAR PRODUCTO</small></h1>
@include('partials.errors')
  <form class="" action="{{route('formulario')}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="nombre">Nombre producto</label>
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
        <label for="extract">Pequeña descripcion</label>
        <input type="text" class="form-control" name="extract" placeholder="Pequeña descripción">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" name="precio" placeholder="Precio del producto">
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <select class="form-control" name="categoria">
        @foreach ($categorias as $cat)
          <option value=""></option>
        @endforeach
        </select>
      </div>
    </div>

  </form>

</div>

@endsection

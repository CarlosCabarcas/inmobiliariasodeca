@extends('layout_admin')

@section('title')
  Platform - Admin
@endsection

@section('content')

<!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header cabecera">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mensaje de Sodeca</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify"><strong>¿Esta seguro que desea eliminar este Proyecto?.<br></strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-primary" id="btnconfirm">Sí</a>
      </div>
    </div>
  </div>
</div>
<!--<style>
img
{
  width: 10%;
  max-width: 10%;
}
</style>-->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Sodeca Unión LTDA<small> LISTADO DE PROYECTOS</small></h1>

  <table class="table table-responsive table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre del proyecto</th>
        <th>Tipo de inmueble</th>
        <th>Imagen principal</th>
        <th>Descripción</th>
        <th>Controles</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyect)
      <tr>
        <td>{{$proyect->nombreProyecto}}</td>
        <td>{{$proyect->tipoInmueble}}</td>
        <td><img src="imgProyectos/{{$proyect->imagen_principal	}}" class="zoom" height="50px" width="70px"></td>
        <td>{{$proyect->descripcion}}</td>
        <td>
          <div class="btn-group btn-group-xs" role="group" aria-label="...">
            <a type="button" href="{{route('editar_proyecto', $proyect->id)}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i></a>
            <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminar" onclick="return confirmar('{{route('delete', $proyect->id)}}')"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</i></a>
          </div>
        </td>
      </tr>
  @endforeach
    </tbody>
  </table>
  {!! $proyectos->render() !!}
</div>
<script>
  function confirmar(url)
  {
    var ruta = url;
    var d = document.getElementById("btnconfirm");
    d.setAttribute("href", ruta);
    //window.location=url;
    //
  }
</script>
<style type="text/css">
    .zoom{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 6s, height 6s, transform 6s;
        -moz-transition: width 6s, height 6s, -moz-transform 6s;
        -webkit-transition: width 6s, height 6s, -webkit-transform 6s;
        -o-transition: width 6s, height 6s,-o-transform 6s;
    }
    .zoom:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(6);
        -moz-transform : scale(6);      /* Firefox */
        -webkit-transform : scale(6);   /* Chrome - Safari */
        -o-transform : scale(6);        /* Opera */
    }
</style>

@endsection

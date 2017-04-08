@extends('template')

@section('content')

<main class="container">
    <h2 class="">Nuestros Proyectos</h2>
    @if(isset($proyectos))
    <div class="row">
      @foreach($proyectos as $in)
      <!--@if(isset($imagenes))
      @foreach($imagenes as $en)
        <img src="{{ $en -> idImagen }}" alt="">

      @endforeach
      @endif-->

      <div class="col s12 m4">
        <div class="card sticky-action hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="imgProyectos/{{ $in->imagen_principal }}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{ $in->nombreProyecto }}<i class="material-icons right">more_vert</i></span>
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn blue" href="/ver_proyecto/{{ $in->nombreProyecto }}/{{ $in->id }}">Ver</a>
          </div>
          <div class="card-reveal" style="display:none; transform: translateY(0%); background-color: rgb(102, 234, 202);">
            <span class="card-title grey-text text-darken-4">Características<i class="material-icons right">close</i></span>
            <p class="caption">
              <?php echo ($in->caracteristicas) ?>
            </p>
          </div>
        </div>
      </div>
      @endforeach

    </div>   <!-- este es ultimo div  -->
    @endif
  </main>
@stop

@section('activeproyectos')
  current
@stop

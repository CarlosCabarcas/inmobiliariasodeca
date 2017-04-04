@extends('template')

@section('content')

<main class="container">
    <h2 class="">Nuestros Proyectos</h2>

    <div class="row">
      <div class="col s12 m4">
        <div class="card sticky-action hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('images/1vallejo.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Urbanización Vallejo Primera Etapa<i class="material-icons right">more_vert</i></span>
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn blue" href="#">Ver</a>
          </div>
          <div class="card-reveal" style="display:none; transform: translateY(0%); background-color: rgb(102, 234, 202);">
            <span class="card-title grey-text text-darken-4">Características<i class="material-icons right">close</i></span>
            <p class="caption">
              * Lote 112 m<sup>2</sup> <br>
              * 3 Alcobas <br>
              * 2 Baños <br>
              * Sala Comedor <br>
              * Cocina <br>
              * Garaje con Puerta Electrica <br>
              * Área de Labores <br>
              * Piso en Porcelanato <br>
              * Fachada decorada en Fachaleta <br>
              * Cielo Razo en Dri-Wall <br>
              * Tiene 88.8 m<sup>2</sup> de Construcción
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card sticky-action hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('images/1vallejo.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Urbanización Vallejo Segunda Etapa<i class="material-icons right">more_vert</i></span>
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn blue" href="#">Ver</a>
          </div>
          <div class="card-reveal" style="display:none; transform: translateY(0%); background-color: rgb(102, 234, 202);">
            <span class="card-title grey-text text-darken-4">Características<i class="material-icons right">close</i></span>
            <p class="caption" style="margin-bottom: 0.2px;">Vivienda de 1 Planta con:</p>
            <p class="caption">
              * 3 Alcobas<br>
              * Sala-Comedor <br>
              * 2 Baños <br>
              * Cocina Integral <br>
              * Terraza-Garaje <br>
              * Área de Labores (patio)<br>
              * Piso en Porcelanato <br>
              * Fachada decorada en Fachaleta <br>
              * Cielo Razo en Dri-Wall <br>
              * Area lote 84 mts<sup>2</sup><br>
              * Area construida 70 mts<sup>2</sup> aprox <br>
            </p>
          </div>
        </div>
      </div>



    </div>   <!-- este es ultimo div  -->

  </main>
@stop

@section('activeproyectos')
  current
@stop

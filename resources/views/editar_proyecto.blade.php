@extends('layout_admin')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbAzRFLE3CS4p52WKwYsRWmteUZTAOkm8&libraries=places">
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Sodeca Unión LTDA <small>EDITAR PROYECTO</small></h1>
@foreach($editar as $edit)
  <form class="" action="{{route('guardar_edicion', $edit->id)}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="nombre">Nombre del proyecto</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del proyecto" value="{{$edit->nombreProyecto}}">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea rows="3" class="form-control"  name="descripcion" placeholder="Descripción del proyecto">{{$edit->descripcion}}</textarea>
      </div>

      <div class="form-group">
        <label for="caracteristicas">Características</label>
        <textarea rows="3" class="form-control"  name="caracteristicas" placeholder="Características del proyecto">{{$edit->caracteristicas}}</textarea>
      </div>
      <!--<div class="form-group">
        <label for="imagen">Imagenes</label>
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen1">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen2">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen3">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen4">
      </div>-->
      <div class="form-group">
        <label for="categoria">Tipo de Inmueble</label>
        <select class="form-control" name="categoria">
          <option value="{{$edit->tipoInmueble}}">{{$edit->tipoInmueble}}</option>
          <option value="Casa">Casa</option>
          <option value="Apartamento">Apartamento</option>
          <option value="Casa finca">Casa finca</option>
          <option value="Finca">Finca</option>
          <option value="Oficina">Oficina</option>
        </select>
      </div>

      <div class="col-md-6 ">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    <div class="col-md-6">

      <div class="form-group">
        <label for="lat">Mapa</label>
        <input type="text" name="buscarmapa" id="buscarmapa" class="form-control">
        <div id="map2"></div>
      </div>

      <div class="form-group">
        <label for="lat">Latitud</label>
        <input type="text" name="lat" id="lat" class="form-control" value="{{$edit->latitud}}">
      </div>

      <div class="form-group">
        <label for="lng">Longitud</label>
        <input type="text" name="lng" id="lng" class="form-control" value="{{$edit->longitud}}">
      </div>

    </div>

    <!--script para manipular el mapa-->
    <script>
    var lat = {{$edit->latitud}}
    var lng = {{$edit->longitud}}

    var  map = new google.maps.Map(document.getElementById('map2'),{
      center:{
        lat: lat,
        lng: lng
      },
      zoom: 13
    });

    var marker =  new google.maps.Marker({
      position: {
        lat: lat,
        lng: lng
      },
      map: map,
      draggable: true
    });

    var searchBox = new google.maps.places.SearchBox(document.getElementById('buscarmapa'));
    google.maps.event.addListener(searchBox, 'places_changed', function(){
      var places = searchBox.getPlaces();
      var bounds = new google.maps.LatLngBounds();
      var i, place;

      for (i=0; place=places[i];i++){
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location);
      }
      map.fitBounds(bounds);
      map.setZoom(13);
    });

    google.maps.event.addListener(marker, 'position_changed', function(){
      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();

      $('#lat').val(lat);
      $('#lng').val(lng);
    });
    </script>
  </form>
  @endforeach
</div>

@endsection

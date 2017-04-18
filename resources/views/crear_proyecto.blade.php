@extends('layout_admin')

@section('title')
  Platform - Admin
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbAzRFLE3CS4p52WKwYsRWmteUZTAOkm8&libraries=places">
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Sodeca Unión LTDA <small>AGREGAR PROYECTO</small></h1>
  @include('layouts.errors')
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
        <input type="file" name="imagen-principal"  class="filestyle" value="" multiple="true" data-preview-file-type="any">
      </div>

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
    </div>

    <div class="col-md-6">

      <div class="form-group">
        <label for="lat">Mapa</label>
        <input type="text" name="buscarmapa" id="buscarmapa" class="form-control">
        <div id="map"></div>
      </div>

      <div class="form-group">
        <label for="lat">Latitud</label>
        <input type="text" name="lat" id="lat" class="form-control">
      </div>

      <div class="form-group">
        <label for="lng">Longitud</label>
        <input type="text" name="lng" id="lng" class="form-control">
      </div>

    </div>

    <div class="row">
      <div class="col-md-3 col-md-offset-4">
        <h2>Imagenes:</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <div class="form-group">
            <label for="nombreImagen1">Imagen 1</label>
            <input type="text" name="nombreImagen1" value="" placeholder="Nombre" class="form-control">
            <textarea type="text" name="descripcionImagen1" value="" placeholder="Descripcion" class="form-control"></textarea>
            <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen1" class="form-control">
            </div>
          <div class="form-group">
            <label for="nombreImagen2">Imagen 3</label>
            <input type="text" name="nombreImagen2" value="" placeholder="Nombre" class="form-control">
            <textarea type="text" name="descripcionImagen2" value="" placeholder="Descripcion" class="form-control"></textarea>
            <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen2" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombreImagen3">Imagen 5</label>
            <input type="text" name="nombreImagen3" value="" placeholder="Nombre" class="form-control">
            <textarea type="text" name="descripcionImagen3" value="" placeholder="Descripcion" class="form-control"></textarea>
            <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen3" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombreImagen4">Imagen 7</label>
            <input type="text" name="nombreImagen4" value="" placeholder="Nombre" class="form-control">
            <textarea type="text" name="descripcionImagen4" value="" placeholder="Descripcion" class="form-control"></textarea>
            <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen4" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombreImagen5">Imagen 9</label>
            <input type="text" name="nombreImagen5" value="" placeholder="Nombre" class="form-control">
            <textarea type="text" name="descripcionImagen5" value="" placeholder="Descripcion" class="form-control"></textarea>
            <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen5" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <div class="form-group">
              <label for="nombreImagen6">Imagen 2</label>
              <input type="text" name="nombreImagen6" value="" placeholder="Nombre" class="form-control">
              <textarea type="text" name="descripcionImagen6" value="" placeholder="Descripcion" class="form-control"></textarea>
              <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen6" class="form-control">
              </div>
            <div class="form-group">
              <label for="nombreImagen7">Imagen 4</label>
              <input type="text" name="nombreImagen7" value="" placeholder="Nombre" class="form-control">
              <textarea type="text" name="descripcionImagen7" value="" placeholder="Descripcion" class="form-control"></textarea>
              <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen7" class="form-control">
            </div>
            <div class="form-group">
              <label for="nombreImagen8">Imagen 6</label>
              <input type="text" name="nombreImagen8" value="" placeholder="Nombre" class="form-control">
              <textarea type="text" name="descripcionImagen8" value="" placeholder="Descripcion" class="form-control"></textarea>
              <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen8" class="form-control">
            </div>
            <div class="form-group">
              <label for="nombreImagen9">Imagen 8</label>
              <input type="text" name="nombreImagen9" value="" placeholder="Nombre" class="form-control">
              <textarea type="text" name="descripcionImagen9" value="" placeholder="Descripcion" class="form-control"></textarea>
              <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen9" class="form-control">
            </div>
            <div class="form-group">
              <label for="nombreImagen10">Imagen 10</label>
              <input type="text" name="nombreImagen10" value="" placeholder="Nombre" class="form-control">
              <textarea type="text" name="descripcionImagen10" value="" placeholder="Descripcion" class="form-control"></textarea>
              <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="imagen10" class="form-control">
            </div>
          </div>
        </div>
      <div class="col-md-6 ">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>

    <!--script para manipular el mapa-->
    <script>
    var  map = new google.maps.Map(document.getElementById('map'),{
      center:{
        lat: 8.76055140911674,
        lng: -75.88197000000002
      },
      zoom: 14
    });

    var marker =  new google.maps.Marker({
      position: {
        lat: 8.76055140911674,
        lng: -75.88197000000002
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
</div>

@endsection

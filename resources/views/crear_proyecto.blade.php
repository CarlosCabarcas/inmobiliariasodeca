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

      <div class="form-group" id="map">
      </div>

    </div>

    <!--script para manipular el mapa-->
    <script>
    var map
    var myLatLng
      function initMap() {

        geolocationInit();

        function geolocationInit(){
          if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success, fail);
          }else {
            alert("navegador no apto");
          }
        }

        function success(position){
          console.log(position);
          var latval=position.coords.latitude;
          var lngval=position.coords.longitude;

          myLatLng = new google.maps.LatLng(latval, lngval);
          createMap(myLatLng);
          nearbySearch(myLatLng, type);
        }

        function fail(){
          alert("error");
        }

        function createMap(myLatLng){
            map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 13
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
          });
        }

        //marcador
        function createMarker(latlng, icn, name){
          var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title: name
          });
        }

        function nearbySearch(myLatLng, type){
          var request = {
            location: myLatLng,
            radius: '2500',
            types: [type]
          };

          service = new google.maps.places.PlacesService(map);
          service.nearbySearch(request, callback);

          function callback(results, status) {

            //console.log(results);
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
              var place = results[i];
              console.log(place);
              latlng = place.geometry.location;
              icn = place.icn;
              name = place.name;

              createMarker(latlng, icn);
            }
          }
        }
      }
    }

    </script>
  </form>
</div>

@endsection

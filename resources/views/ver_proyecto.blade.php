<!DOCTYPE html>
<html>
  @include('layouts/head')
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <body id="top" class="scrollspy">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbAzRFLE3CS4p52WKwYsRWmteUZTAOkm8&libraries=places">
</script>

  <!-- Pre Loader -->
  <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

  </div>
  @include('layouts/navbar')
  <br><br>
  <div class="row">
   <div class="col s12">
     <ul class="tabs">
     <li class="tab col s3"><a class="active" href="#ubi">Ubicación</a></li>
       <li class="tab col s3"><a href="#im">Imagenes</a></li>
       <li class="tab col s3"><a href="#des">Descripcion</a></li>
       <li class="tab col s3"><a href="#car">Características</a></li>
     </ul>
   </div>
 </div>
  <div class="container row">
    <div id="des" class="col s12 container" style="display: none; height: 600px; border-radius: 20px;">
      <div class="container" style="pading: 200px;">
        <h2 class="center">Descripción</h2>
        <font size=5>{{$proyecto -> descripcion}}</font>
      </div>
    </div>
    <div id="car" class="col s12 container" style="display: none; height: 600px; border-radius: 20px;">
      <div class="container" style="pading: 50px;">
        <h2 class="center">Características</h2>
        <p class="center"><font size=5><?php echo $proyecto->caracteristicas?></font></p>
      </div>
    </div>
    <div id="ubi" class="col s12 container" style="display: inherit; height: 600px;">
        <div id="map2"></div>
    </div>
    <div id="im" class="col s12 container" style="display: none; height: 600px;">
      <div class="slider">
        <ul class="slides">
          @foreach($imagenes as $in)
          <li>
            <img src="{{asset('imgProyectos')}}/{{$in->ruta}}" width="100%"> <!-- random image -->
            <div class="caption center-align">
              <h3>{{$in -> nombreImagen}} </h3>
              <h5 class="grey-text text-lighten-3">{{$in -> descripcionImagen}}</h5>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <style media="screen">
    body{
      background: url('{{asset("images/edificio.jpg")}}');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: 100%;
    }
    #map2{
      width: 100%;
      height: 500px;
    }
  </style>
  <script src="{{asset('js/jquery2.0.3.min.js')}}" charset="utf-8"></script>
  <script>
  var lat = {{$proyecto->latitud}};
  var lng = {{$proyecto->longitud}};

  var  map = new google.maps.Map(document.getElementById('map2'),{
    center:{
      lat: lat,
      lng: lng
    },
    zoom: 15
  });

  var marker = new google.maps.Marker({
    position:{
      lat:lat,
      lng: lng
    },
    map:map
  });
  </script>
  <script>
  $(document).ready(function(){
        $('.slider').slider();
        $(".button-collapse").sideNav();
        $('.materialboxed').materialbox();
        $('ul.tabs').tabs();

      /*  $('.slider').slider('pause');
        // Start slider
        $('.slider').slider('start');
        // Next slide
        $('.slider').slider('next');
        // Previous slide
        $('.slider').slider('prev');

        // Show sideNav
      $('.button-collapse').sideNav('show');
      // Hide sideNav
      $('.button-collapse').sideNav('hide');
      // Destroy sideNav
      $('.button-collapse').sideNav('destroy');*/
  });


  </script>

  @include('layouts/footer')

  <script src="{{asset('min/plugin-min.js')}}"></script>
  <script src="{{asset('min/custom-min.js')}}"></script>

  </body>
</html>

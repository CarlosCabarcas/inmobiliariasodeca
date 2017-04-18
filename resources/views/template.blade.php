<!DOCTYPE html>

<html>
  @include('layouts/head')
  <body id="top" class="scrollspy">

  <!-- Pre Loader -->
  <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

  </div>
  @include('layouts/navbar')

  @include('layouts/inicio')

  @include('layouts/proyectos')

  <div class="parallax-container">
      <!--<div class="parallax"><img src="{{asset('img/slider-1.jpg')}}"></div>-->
      <div class="slider">
    <ul class="slides">
      <li>
        <img src="{{asset('img/slider-3.jpg')}}">
      </li>
      <li>
        <img src="{{asset('img/slider-2.jpg')}}">
      </li>
      <li>
        <img src="{{asset('img/slider-1.jpg')}}">
      </li>
    </ul>
  </div>

  </div>

  @include('layouts/quienessomos')

  @include('layouts/footer')

    <script src="{{asset('min/plugin-min.js')}}"></script>
    <script src="{{asset('min/custom-min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.slider').slider();
  });
    </script>

  </body>
</html>

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
      <div class="parallax"><img src="img/slider-1.jpg"></div>
  </div>

  @include('layouts/quienessomos')

  @include('layouts/footer')

    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

  </body>
</html>

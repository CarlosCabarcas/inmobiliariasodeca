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
  @include('layouts.navbar')
  @yield('content')
  @include('layouts.footer')

    <script src="{{asset('min/plugin-min.js')}}"></script>
    <script src="{{asset('min/custom-min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.slider').slider();
  });
    </script>

  </body>
</html>

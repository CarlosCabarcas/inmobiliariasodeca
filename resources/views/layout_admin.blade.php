
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Bienvenido Administrador - Sodeca')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/c0988e1618.js"></script>

    <!--<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/inicio_admin">Sodeca Unión LTDA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            @include('menu-user')
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/inicio_admin"><i class="fa fa-home" aria-hidden="true"></i> Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="/crear_proyecto"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar proyecto </a></li>
            <li><a href="/listar_proyectos"><i class="fa fa-align-justify" aria-hidden="true"></i> Listar proyectos </a></li>
          </ul>
        </div>

        @yield('content')

        </div>
      </div>
    </div>

    <script src="{{ asset('js/jquery2.0.3.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("js/jquery2.0.3.min.js")}}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Api Google map -->

  </body>
</html>

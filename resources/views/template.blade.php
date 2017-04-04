<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sodeca Union Limitada</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/grid_12.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/jqtransform.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{asset('js/jquery-1.7.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/cufon-yui.js')}}"></script>
    <script src="{{asset('js/vegur_400.font.js')}}"></script>
    <script src="{{asset('js/Vegur_bold_700.font.js')}}"></script>
    <script src="{{asset('js/cufon-replace.js')}}"></script>
    <script src="{{asset('js/tms-0.4.x.js')}}"></script>
    <script src="{{asset('js/jquery.jqtransform.js')}}"></script>
    <script src="{{asset('js/FF-cash.js')}}"></script>
    <link href="{{asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet"/>
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="{{asset('css/style2.css')}}" type="text/css" rel="stylesheet"/>
    <script>
		$(document).ready(function(){
			$('.form-1').jqTransform();
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="main">
<!--==============================header=================================-->
<header>
  <div>
      <h1><a href="#"><img src="{{asset('images/sodeca_isologo.png')}}" class="logo_sodeca"></a></h1>
      <div class="social-icons">
        <span><b>Siguenos: </b></span>
          <!--<a href="#" class="icon-3"></a>-->
          <a target="_blank" href="https://www.facebook.com/sodecaunionltda/" class="icon-2"></a>
          <!--<a href="#" class="icon-1"></a>-->
      </div>
      <div id="slide">
          <div class="slider">
              <ul class="items">
                  <li><img src="{{asset('images/slider-1.jpg')}}"alt="" /></li>
                  <li><img src="{{asset('images/slider-2.jpg')}}" alt="" /></li>
                  <li><img src="{{asset('images/slider-3.jpg')}}"alt="" /></li>
              </ul>
          </div>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
      </div>
        <nav>
          <div class="nav-wrapper">
            <ul id="nav-mobile" class="menu left hide-on-med-and-down">
                <li class="@yield('activeinicio')"><a href="/">Inicio</a></li>
                <li class="@yield('activenosotros')"><a href="/nosotros">Nosotros</a></li>
                <li class="@yield('activeproyectos')"><a href="/proyectos">Proyectos</a></li>
                <li class="@yield('activecontacto')"><a href="/contacto">Contacto</a></li>
            </ul>
          </div>
        </nav>
  </div>
</header>

@yield('content')

</div>
<!--==============================footer=================================-->
<footer class="">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="p3">SODECA UNIÓN LTDA</h5>
          <ul>
            <li><a href="/nosotros" class="p3">Nosotros</a></li>
            <li><a href="/contacto" class="p3">Contacto</a></li>
            <li><a href="/proyectos" class="p3">Proyectos</a></li>
          </ul>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="p3">Nuestras Redes</h5>
          <ul>
            <li><a href="https://www.facebook.com/Sodeca-Uni%C3%B3n-Ltda-1789881614665523/?fref=ts" target="_blank"><img alt="Siguenos en Facebook" src="{{asset('images/fac.png')}}" width=48 height=48  /></a></li>
            <!--<li><a href="http://twitter.com/AQUI_TU_USUARIO" target="_blank"><img src="{{asset('images/twi.png')}}" width=48 height=48 alt="Síguenos en Twitter" /></a></li>-->
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
          © 2017 Copyright Text
      </div>
    </div>
  </footer>
<script>
	Cufon.now();
</script>
</body>
</html>

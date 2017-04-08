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
              <ul id="nav-mobile" class="menu">
                  <li class="@yield('activeinicio')"><a href="/">Inicio</a></li>
                  <li class="@yield('activenosotros')"><a href="/nosotros">Nosotros</a></li>
                  <li class="@yield('activeproyectos')"><a href="/proyectos">Proyectos</a></li>
                  <li class="@yield('activecontacto')"><a href="/contacto">Contacto</a></li>
              </ul>
            </div>
      </nav>
  </div>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/grid_12.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/jqtransform.css')}}">
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
        	<span>Follow Us:</span>
            <a href="#" class="icon-3"></a>
            <a target="_blank" href="https://www.facebook.com/sodecaunionltda/" class="icon-2"></a>
            <a href="#" class="icon-1"></a>
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
            <ul class="menu">
                <li class="current"><a href="#">Main</a></li>
                <li><a href="#">Buying</a></li>
                <li><a href="#">Selling</a></li>
                <li><a href="#">Renting</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--==============================content================================-->
<section id="content"><div class="ic"></div>
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Welcome message!</h2>
        <p class="p2">Real Estate is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank" class="link">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
        <p class="line-1">Download the basic package of this <a href="http://blog.templatemonster.com/2012/04/09/free-website-template-real-estate-justslider/" target="_blank" class="link">Real Estate Template</a> (without PSD source) that is available for anyone without registration. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the free template ZIP package to be delivered to.</p>
        <h2 class="p4">Buyers. Sellers. Proprietors. Agents.</h2>
        <div class="wrap block-1">
            <div>
                <img src="{{asset('images/page1-img1.jpg')}}" alt="" class="img-border">
                <h3>Selling</h3>
                <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                <a href="#" class="button">More</a>
            </div>
            <div>
                <img src="{{asset('images/page1-img2.jpg')}}" alt="" class="img-border">
                <h3>Investing</h3>
                <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                <a href="#" class="button">More</a>
            </div>
            <div class="last">
                <img src="{{asset('images/page1-img3.jpg')}}" alt="" class="img-border">
                <h3>Renting</h3>
                <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                <a href="#" class="button">More</a>
            </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
            <h2 class="top-1 p3">Find your home</h2>
            <form id="form-1" class="form-1 bot-1">
                <div class="select-1">
                    <label>Home type</label>
                    <select name="select" >
                        <option>Homes for sale</option>
                    </select>
                </div>
                <div>
                    <label>Location</label>
                    <input type="text" value="Address, City, Zip" onBlur="if(this.value=='') this.value='Address, City, Zip'" onFocus="if(this.value =='Address, City, Zip' ) this.value=''"  />
                </div>
                <div class="select-2">
                    <label>Beds</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>
                </div>
                <div class="select-2 last">
                    <label>Baths</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>
                </div>
                <a onClick="#" class="button">Search</a>
                <div class="clear"></div>
            </form>
            <h2 class="p3">Find our office</h2>
            <img src="{{asset('images/page1-img4.png')}}" alt="">
            <div class="lists">
                <ul class="list-1">
                    <li><a href="#">Asia</a></li>
                    <li><a href="#">Australia</a></li>
                    <li><a href="#">Africa</a></li>
                </ul>
                <ul class="list-1 last">
                    <li><a href="#">North America</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">Latin America</a></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
</section>
</div>
<!--==============================footer=================================-->
<footer class="page-footer colorp">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">SODECA UNIÓN LTDA</h5>
          <ul>
            <li><a href="sobre-nosotros.html" class="grey-text text-lighten-4">Nosotros</a></li>
            <li><a href="contacto.html" class="grey-text text-lighten-4">Contacto</a></li>
            <li><a href="proyectos.html" class="grey-text text-lighten-4">Proyectos</a></li>
          </ul>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Nuestras Redes</h5>
          <ul>
            <li><a href="https://www.facebook.com/Sodeca-Uni%C3%B3n-Ltda-1789881614665523/?fref=ts" target="_blank"><img alt="Siguenos en Facebook" src="{{asset('images/fac.png')}}" width=48 height=48  /></a></li>
        <li><a href="http://twitter.com/AQUI_TU_USUARIO" target="_blank"><img src="{{asset('images/twi.png')}}" width=48 height=48 alt="Síguenos en Twitter" /></a></li>
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

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sodeca Union Ltda</title>
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
    <!--<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>-->
    <script src="{{asset('js/materialize.min.js')}}"></script>
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

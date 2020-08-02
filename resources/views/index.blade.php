<!--DOCTYPE HTML-->
<html>
<head>
	<!--Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('fas/css/all.css') }}">

<title>Evolution </title>
</head>
<body>
<nav class="navbar">
  <div class="logo">
  <img src="http://www.evolutionmedia.cl/images/logo.png" id="logo" />
  </div>
  <div class="links-right">
  	<a id="home" >Home</a>
  	<a id="nosotros">Nosotros</a>
  	<a id="servicios">Servicios</a>
  	<a id="contacto">Contacto</a>
  </div>
</nav>
<div class="parallax">
	
</div>
<!-- Nuestra empresa -->
@include('includes.nuestra-empresa')
<!--Comunicación audiovisual a tu medida -->
@include('includes.comunicacion-audiovisual')
<!--Nuestros servicios -->
@include('includes.nuestros-servicios')
<!--Somos tu mejor opción -->
@include('includes.somos')
<!--Contactanos-->
@include('includes.contactanos')
<span class="ir-arriba">Ir arriba</span>
@include('includes.footer')
</body>
</html>
@php
$configuracion = DB::table('configuracions')->where('id',  1)->first();
$correo_contacto = $configuracion->correo_contacto;
$pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
$correos = [];
preg_match_all($pattern, $correo_contacto, $correos);

@endphp

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<title>{{$configuracion->nombre_tienda}}</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">

	<!-- font-awesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

	<!-- animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">

	<!-- slick CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">

	<!--magnific-popup CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">


	<!-- main CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

	<!-- google font CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>

<body class="home layout-boxed section-bg" >
	<div class="site-wrapper">
		
		
		<!-- =====================================
		==== Start header -->
		<header class="header drank ">

			<div class="header_container" style="background:#111111">
			
		
				<!-- header-desktop -->
				<div class="header-menu  header-desktop">
					<div class="container">
						<div class="row">
							<div class="col-md-2 d-flex align-items-center justify-content-center">
							<a class="logo" href="{{route('web.index')}}">
									<img src="{{asset('assets/images/logo.png')}}" alt="Logo">
								</a>
							</div>
							<div class="col-md-10 header-menu-main">
								<div class="site-header d-flex justify-content-between align-items-center">
									<!-- cart -->
									<div class="site-header__icon  d-flex justify-content-end align-items-center">
										<div class="features_icon">
											<div class="features_icon__images">
												<img src="{{asset('assets/images/icon_1.png')}}" id="prueba" alt="Contacto">
											</div>
											<div class="features_icon__description">
												<h4>PEDIDOS AL</h4>
												<div>
													{{$configuracion->telefono_contacto}}
												</div>
											</div>
										</div>
										<div class="features_icon">
											<div class="features_icon__images">
												<img src="{{asset('assets/images/icon_2.png')}}" alt="Correo">
											</div>
											<div class="features_icon__description flex">
												<h4>CORREO</h4>
												<div>
													<span>{{$correos[0][0]}}</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- menu -->
								<div class="header-main">
									<div class="row">
										<div class="header-left col-md-10">
											<nav id="nav" class="navbar">
												<!--  Main navigation  -->
												<ul class="main-nav nav navbar-nav navbar-right">
													<li class="dropdown active">
													<a href="{{route('web.index')}}">Inicio</a>
													</li>
													<li class="dropdown">
														<a href="{{route('web.productos')}}">Productos</a>
													</li>
													<li class="dropdown"><a href="{{route('web.nosotros')}}">Nosotros</a></li>
													<li><a href="{{route('web.contacto')}}"> Contacto</a></li>

												</ul>
												<!-- /Main navigation -->
											</nav>
										</div>
										<div class="header-right col-md-2">
											<ul class="social">
												@if($configuracion->enlace_facebook)
												<li>
													<a href="{{$configuracion->enlace_facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
												</li>
												@endif
												@if ($configuracion->enlace_twitter)
												<li>
													<a href="{{$configuracion->enlace_twitter}}" target="_blank"><i class="fa fa-twitter" ></i></a>
												</li>
												@endif
												@if ($configuracion->enlace_instagram)
												<li>
													<a href="{{$configuracion->enlace_instagram}}" class="w-5" target="_blank"><i class="fab fa-instagram "></i></a>
												</li>
												@endif
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /header-desktop -->

				<!-- header-mobile -->
				<div class="header-mobile">
					<div id="header" class="site-header-mobile">
						<nav class="navigation navbar navbar-default">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="open-btn">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="{{route('web.index')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
								</div>

								<div id="navbar" class="navbar-collapse collapse navbar-right navigation-mobile">
									<button class="close-navbar"><i class="fa fa-close"></i></button>
									<ul class="nav navbar-nav small-nav">
										<li class="menu-item-has-children">
											<a href="{{route('web.index')}}">Inicio</a>
										</li>
										<li class="menu-item-has-children">
											<a href="{{route('web.productos')}}">Producto</a>
										</li>
										<li class="menu-item-has-children"><a href="{{route('web.nosotros')}}">Nosotros</a></li>
										<li class="menu-item-has-children">

										<li class="menu-item-has-children"><a href="{{route('web.contacto')}}">Contacto</a></li>
									</ul>
								</div><!-- end of nav-collapse -->
							</div><!-- end of container -->
						</nav>
					</div>
				</div>
				<!-- /header-mobile -->
			</div>
		</header>
		<!-- End header ====
			======================================= -->

			@yield('content')

		<!-- =====================================
	    	==== Start footer -->
		<footer class="site-footer clearfix mt-4">
			<!-- =====================================
						==== Start contactform  -->
			{{-- <div class="newsletter_form clearfix">
				<div class="container">
					<div class=" row newsletter">

					</div>
				</div>
			</div> --}}
			<!-- =====================================
						==== End contactform  -->

			<div class="site-footer__main">
				<div class="container">
					<div class="row">
						<div class="col-md-3 footer-block">
							<aside class="widget-text">
								<div class="footer__logo">
									<a href="{{route('web.index')}}">
										<img src="{{asset('assets/images/logo.png')}}" alt="">
									</a>
								</div>
								{{-- <div class="footer__info">
									<p><i class="fa fa-map-marker" aria-hidden="true"></i>{{$configuracion->direccion_tienda}}</p>
									<p>
										<span><i class="fa fa-mobile" aria-hidden="true"></i>{{$configuracion->telefono_contacto}}</span>
									</p>
									<p>
										<span><i class="fa fa-envelope"></i><a href="mailto:info@example.com">{{$configuracion->correo_contacto}}</a></span>
										<span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$configuracion->horario_atencion}}</span>
									</p>
								</div> --}}
							</aside>
						</div>
						<div class="col-md-9 footer-block ">
							<div class="row">
								<div class="col-md-6 foot_acceso_rapido">
									<aside class="widget-menu-item">
										<h3 class="widget-title">Accesos Rapidos</h3>
										<ul class="columns-2">
											<li><a href="{{route('web.index')}}">Inicio</a></li>
											<li><a href="{{route('web.productos')}}">Productos</a></li>
											<li><a href="{{route('web.nosotros')}}">Nosotros</a></li>
											<li><a href="{{route('web.contacto')}}">Contacto</a></li>
											<li><a href="#"> Politica de Delivery</a></li>
										</ul>
									</aside>
								</div>
								<div class="col-md-6 foot_informacion_direcciones">
									<div class="footer__info">
										<p><span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$configuracion->direccion_tienda}}</span></p>
										<p>
											<span><i class="fa fa-mobile" aria-hidden="true"></i>{{$configuracion->telefono_contacto}}</span>
										</p>
										<p>
											<span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$configuracion->horario_atencion}}</span>
										</p>
										<p>
											<span style="
											width: 100%;"><i class="fa fa-envelope"></i>
											@foreach ($correos[0] as $key => $correo)		
											<a href="mailto:{{$correo}}">{{$correo}} @if(count($correos[0]) > 1 && count($correos[0]) > ($key+1)) / @endif</a>

											@endforeach
											</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12  d-flex justify-content-between align-items-center">
							<div class="copyright">
								Copyright © 2020. Todos los derechos reservados
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- =====================================
	    	==== End footer -->


		<!-- back-to-top-->
		<div id="back-to-top"></div>
		<!-- back-to-top -->

	</div>

	<!-- =====================================
    	====Start all js here -->

	<!-- jquery js-->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>

	<!-- bootstrap js-->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<script src="https://kit.fontawesome.com/da8e6b6767.js" crossorigin="anonymous"></script>

	<!-- slick js-->
	<script src="{{asset('assets/js/slick.min.js')}}"></script>

	<!-- slick animation js-->
	<script src="{{asset('assets/js/slick-animation.min.js')}}"></script>

	<!-- spritespin js-->
	<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>

	<!-- waypoints js-->
	<script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>

	<!-- counterup js-->
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>


	<!-- Magnific js-->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>


	<!-- custom js-->
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<!-- =====================================
    	==== End all js herej -->
			@stack('scripts')
</body>

</html>
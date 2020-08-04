
@section('header')
<!-- =====================================
		==== Start header -->
		<header class="header drank">
			<div class="topbar">
				<div class="container top-bar">
					<div class="top-bar__left">
						Bienvenido <a href="#">Games</a>
					</div>
				</div>
			</div>

			<div class="header_container" style="background:url(assets/images/bg_header.jpg) repeat">

				<!-- header-desktop -->
				<div class="header-menu  header-desktop">
					<div class="container">
						<div class="row">
							<div class="col-md-2 d-flex align-items-center justify-content-center">
								<a class="logo" href="index.html">
									<img src="assets/images/logo.png" alt="">
								</a>
							</div>
							<div class="col-md-10 header-menu-main">
								<div class="site-header d-flex justify-content-between align-items-center">
									<!-- cart -->
									<div class="site-header__icon  d-flex justify-content-end align-items-center">
										<div class="features_icon">
											<div class="features_icon__images">
												<img src="assets/images/icon_1.png" id="prueba" alt="">
											</div>
											<div class="features_icon__description">
												<h4>PEDIDOS AL</h4>
												<div>
													0981-123456
												</div>
											</div>
										</div>
										<div class="features_icon">
											<div class="features_icon__images">
												<img src="assets/images/icon_2.png" alt="">
											</div>
											<div class="features_icon__description">
												<h4>CORREO</h4>
												<div>
													info@example.com
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
														<a href="index.html">Inicio</a>
													</li>
													<li class="dropdown">
														<a href="product_grid_sidebar_left.html">Productos</a>
													</li>
													<li class="dropdown"><a href="about.html">Nosotros</a></li>
													<li><a href="product_list_sidebar_left.html">
															Ofertas
														</a></li>
													<li><a href="contact.html"> Contacto</a></li>

												</ul>
												<!-- /Main navigation -->
											</nav>
										</div>
										<div class="header-right col-md-2">
											<ul class="social">
												<li>
													<a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-google"></i></a>
												</li>
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
									<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
								</div>

								<div id="navbar" class="navbar-collapse collapse navbar-right navigation-mobile">
									<button class="close-navbar"><i class="fa fa-close"></i></button>
									<ul class="nav navbar-nav small-nav">
										<li class="menu-item-has-children">
											<a href="index.html">Inicio</a>
										</li>
										<li class="menu-item-has-children">
											<a href="product_grid_sidebar_left.html">Producto</a>
										</li>
										<li class="menu-item-has-children"><a href="about.html">Nosotros</a></li>
										<li class="menu-item-has-children">

										<li class="menu-item-has-children"><a href="contact.html">Contacto</a></li>
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
      
@endsection
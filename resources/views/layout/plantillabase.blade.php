<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('tituloBase')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="{{route('inicio')}}" class="logo"><strong>LOBBY</strong> <span></span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{route('inicio')}}">INICIO</a></li>
							<li><a href="{{route('iniciotrap')}}">QUE ES EL TRAP</a></li>
							<li><a href="{{route('evolucion')}}">EVOLUCION DEL TRAP</a></li>
							<li><a href="{{route('escalon')}}">QUINTO ESCALON</a></li>
							<li><a href="{{route('revelacionM')}}">MEJORES ARTISTAS MASCULINOS 2021</a></li>
							<li><a href="{{route('revelacionF')}}">MEJORES ARTISTAS FEMENINOS 2021</a></li>
							<li><a href="{{route('cancionesArgentina')}}">CANCIONES 2021 </a></li>
						</ul>
						
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>@yield('titulo')</h1>
							</header>
							<div class="content">
								@yield('descripcion')
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
									<a href="" class="image">
										
										<img src="@yield('imagen1')" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>@yield('subtitulo1')</h3>
											</header>
											@yield('descripcion1')
										</div>
									</div>
								</section>
								<section>
									<a href="" class="image">
										
										<img src="@yield('imagen2')" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>@yield('subtitulo2')</h3>
											</header>
											@yield('descripcion2')
										</div>
									</div>
								</section>
								<section>
									<a href="" class="image">
										
										<img src="@yield('imagen3')" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>@yield('subtitulo3')</h3>
											</header>
											@yield('descripcion3')
										</div>
									</div>
								</section>
							</section>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
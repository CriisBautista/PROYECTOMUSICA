<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('titulobase')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
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

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner" align="justify">
									<header class="major">
										<h1>@yield('titulo')</h1>
									</header>
									@yield('texto')
								</div>
							</section>

					</div>

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
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="description" content="HES - Dynamic Web Applications - Project Three">
	<meta name="keywords" content="html, css, php">
	<meta name="author" content="David Petringa">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		@yield('title')
	</title>

	<link href="/css/p3.css?t=<?php echo rand(); ?>" rel="stylesheet" type="text/css">

	@stack('head')

</head>
<body>
	<div id ="wrapper">

		<header class="banner">
			<h1><a href="/">HES - Dynamic Web Applications - Project 3</a></h1>
			<h2>{{ config('app.name') }}</h2>

			<nav>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/show/">Dishes</a></li>
					<li><a href="/create/">Search</a></li>
					<li><a href="/about/">About</a></li>
				</ul>
			</nav>

		</header>

		<section>
			@yield('content')
		</section>

		<footer>
			@include('footers.footermain')
		</footer>

	</div><!--END wrapper div-->

	@stack('body')
	<!-- Default Statcounter code for Harvard Extension DWA
	http://http//www.dukesnuz.com -->
	<script type="text/javascript">
	var sc_project=11889370;
	var sc_invisible=1;
	var sc_security="6ab59e53";
	</script>
	<script type="text/javascript"
	src="https://www.statcounter.com/counter/counter.js"
	async></script>
	<noscript><div class="statcounter"><a title="Web Analytics"
		href="http://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="//c.statcounter.com/11889370/0/6ab59e53/1/" alt="Web
		Analytics"></a></div></noscript>
		<!-- End of Statcounter Code -->
	</body>
	</html>

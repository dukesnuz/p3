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
					<li><a href="/create">Search</a></li>
					<li><a href="/about">About</a></li>
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

</body>
</html>

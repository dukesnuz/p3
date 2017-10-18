<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
	    @yield('title')
	</title>

	<!-- Fonts -->
	<link href="./css/p3.css" rel="stylesheet" type="text/css">

	@stack('head')

</head>
<body>
	<div id ="wrapper">

		<header class="banner">
			<h1>HES - Dynamic Web Applications - Project 3</h1>
			<h2>What's For Dinner?</h2>
		</header>

		<section>
			@yield('content')
		</section>

		<footer>

			<ul>
				<li>School: Harvard Extension</li>
				<li>Class: Dynamic Web Applications</li>
				<li>Assignment: Project three</li>
				<li>Student: David Petringa</li>
				<li>Coded: September 2017</li>
			</ul>

		</footer>

	</div><!--END wrapper div-->

	@stack('body')

</body>
</html>

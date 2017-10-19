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

	<!-- Fonts -->
	<link href="./css/p3.css" rel="stylesheet" type="text/css">

	@stack('head')

</head>
<body>
	<div id ="wrapper">

		<header class="banner">
			<h1>HES - Dynamic Web Applications - Project 3</h1>
			<h2>{{ config('app.name') }}</h2>
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

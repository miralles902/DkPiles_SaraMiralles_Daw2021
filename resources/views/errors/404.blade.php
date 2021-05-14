<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> DKPiles - 404 Error</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/404_lost.css') }}">

</head>

<body>
<div class="face">
	<div class="band">
		<div class="red"></div>
		<div class="white"></div>
		<div class="blue"></div>
	</div>
	<div class="eyes"></div>
	<div class="dimples"></div>
	<div class="mouth"></div>
</div>

<h1>Oops! Algo ha ido mal!</h1>
<br>
<div class="text-center"><a href="{{ url('/') }}" class="button pull-right">Vuelve a casa</a></div>
</body>

</html>
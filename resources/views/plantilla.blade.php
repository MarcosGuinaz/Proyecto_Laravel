<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<style>
		.active a{
			color:red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	@yield('contenedor1')

</body>
</html>
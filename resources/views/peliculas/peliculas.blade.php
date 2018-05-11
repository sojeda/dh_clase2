<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ver Pelicula</title>
</head>
<body>
	@if($movie)
		<h1>Hoy vamos a ver: </h1> {{ $movie }}.
	@else
		No hay pelicula para ver.	
	@endif
</body>
</html>
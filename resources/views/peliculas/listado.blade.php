<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	<h1>Listado de Peliculas</h1>
	<ul>
		@foreach($movies as $movie)
			<li>{{ $movie }}</li>
		@endforeach
	</ul>
</body>
</html>
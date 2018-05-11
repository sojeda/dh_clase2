<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	<h1>Listado de Peliculas</h1>
	<ul>
		@isset($movies)
			@foreach($movies as $movie)
				<li>{{ $movie }}</li>
			@endforeach
		@endisset	
	</ul>
</body>
</html>
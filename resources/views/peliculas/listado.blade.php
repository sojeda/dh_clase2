<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	<ul>
		<?php foreach ($movies as $movie) {
			echo "<li>" . $movie . "</li>";
		} ?>
	</ul>
</body>
</html>
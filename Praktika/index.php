<?php
	include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Skelbius</title>
</head>
<body>

<form action="process.php" method="post">

	Kategorija: <input name="category" type="text">
	Pavadinimas: <input name="title" type="text">
	Aprašymas: <input name="description" type="text">

	<input type="submit">
</form>

</body>
</html>

<?php 
	include 'inc/DBConnection.php';
	$bdd = DBConnection::getInstance();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
</head>
<body>
	<?php
		if('POST' == $_SERVER['REQUEST_METHOD']) {
			$name = $_POST['name']; 
			$players_min = $_POST['players_min'];
			$players_max = $_POST['players_max'];
			$age_min = $_POST['age_min'];
			$age_max = $_POST['age_max'];
			$picture = $_POST['picture'];

			$stmt=$bdd->getConnection()->query("INSERT INTO `boardgames` (`name`, `players_min`, `players_max`, `age_min`, `age_max`, `picture`) 
			VALUES ($name, $players_min, $players_max, $age_min, $age_max, $picture)");

		}
	?>
	<a href="./read.php">Liste des jeux</a>
	<h1>Ajouter un jeu de société</h1>
	<form action="#" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="age_min">Min Age</label>
			<input type="number" name="age_min" value="">
		</div>
		<div>
			<label for="age_max">Max Age</label>
			<input type="number" name="age_max" value="">
		</div>
		<div>
			<label for="players_min">Min Players</label>
			<input type="number" name="players_min" value="">
		</div>
		<div>
            <label for="players_max">Max Players</label>
            <input type="number" name="players_max" value="">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

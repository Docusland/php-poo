<?php

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
			function createBoardGames(){
				$bdd = DBConnection::getInstance()->getConnection();
				   $reponse = $bdd->query("INSERT INTO boardgames (id, nom, players-min, players-max,age-min, age-max, picture)
					VALUES ('$id', '$name','$players_min','$players_max', '$age_min', '$age_max', '$picture');"

			}
}
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
			<label for="min_age">Min Age</label>
			<input type="number" name="min_age" value="">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="max_age" value="">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="min_players" value="">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="max_players" value="">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

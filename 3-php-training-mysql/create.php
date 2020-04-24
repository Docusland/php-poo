<?php
	include_once('inc/Boardgame.php');
	include_once('inc/DBConnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="container">
	<?php
		if('POST' == $_SERVER['REQUEST_METHOD']) {
			$boardgame = new Boardgame($_POST);
			if(count($boardgame->getErrors()) < 1 ) {
				$DBConnection = DBConnection::getInstance();
				$connection = $DBConnection->getConnection();
				$query = $connection->prepare("INSERT INTO 
				boardgames(name,players_min,players_max,age_min,age_max,picture)
				VALUES(:name,:players_min,:players_max,:age_min,:age_max,:picture)
				");	

				$query->bindValue(':name', $boardgame->getName());
				$query->bindValue(':players_min', $boardgame->getPlayersMin());
				$query->bindValue(':players_max', $boardgame->getPlayersMax());
				$query->bindValue(':age_min', $boardgame->getAgeMin());
				$query->bindValue(':age_max', $boardgame->getAgeMax());
				$query->bindValue(':picture', $boardgame->getPicture());
				$status = $query->execute();
				if(!$status) {
					print_r($query->errorInfo());
					echo "<div class='alert alert-danger' role='alert'>",$query->errorCode(), "</div>";
				}
				$query->closeCursor();
			} else {
				foreach ($boardgame->getErrors() as $error) {
					echo "<div class='alert alert-danger' role='alert'>$error</div>";
				}
			}
		}
	?>
	<a href="./read.php">Liste des jeux</a>
	<h1>Ajouter un jeu de société</h1>
	<form action="#" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control" type="text" name="name" value="">
		</div>
		<div class="form-group">
			<label for="age_min">Min Age</label>
			<input class="form-control" type="number" name="age_min" value="">
		</div>
		<div class="form-group">
			<label for="age_max">Max Age</label>
			<input class="form-control" type="number" name="age_max" value="">
		</div>
		<div class="form-group">
			<label for="players_min">Min Players</label>
			<input class="form-control" type="number" name="players_min" value="">
		</div>
		<div class="form-group">
            <label for="players_max">Max Players</label>
            <input class="form-control" type="number" name="players_max" value="">
        </div>
		<div class="form-group">
			<label for="picture">URL of a picture</label>
			<input class="form-control" type="text" name="picture" value="">
		</div>
		<button type="submit" name="button" class='btn btn-primary'>Envoyer</button>
	</form>
</body>
</html>

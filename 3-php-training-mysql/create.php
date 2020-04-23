<?php
	include './inc/Boardgame.php';
	include './inc/DBConnection.php';
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

			if(count($boardgame->getErrors()) < 1 )
			{

				$name = (!empty($_POST['name']) ? $_POST['name'] : '');
				$players_min = (!empty($_POST['min_players']) ? $_POST['min_players'] : '');
				$players_max = (!empty($_POST['max_players']) ? $_POST['max_players'] : '');
				$age_min = (!empty($_POST['min_age']) ? $_POST['min_age'] : '');
				$age_max = (!empty($_POST['max_age']) ? $_POST['max_age'] : '');
				$picture = (!empty($_POST['picture']) ? $_POST['picture'] : '');

				$DBConnection = DBConnection::getInstance();
				$connection = $DBConnection->getConnection();
				$query = $connection->prepare("INSERT INTO 
				boardgame(name,players_min,players_max,age_min,age_max,picture)
				VALUES(:name,:players_min,:players_max,:age_min,:age_max,:picture)
				");	

				$query->bindParam(':name',$name);
				$query->bindParam(':players_min',$players_min);
				$query->bindParam(':players_max',$players_max);
				$query->bindParam(':age_min',$age_min);
				$query->bindParam(':age_max',$age_max);
				$query->bindParam(':picture',$picture);
				$query->execute();
				$query->closeCursor();

				?>
				<div class="alert alert-success" role="alert">
				your boardgame has been successfully registered !
				</div>
				<?php

			}
			else
			{
				$errors = $boardgame->getErrors();
				foreach($errors as $error)
				{
					?>
					<div class="alert alert-danger" role="alert">
					<?= $error; ?>
					</div>
					<?php
				}
			}
		}
	?>
	<a href="./read.php">Liste des jeux</a>
	<h1>Ajouter un jeu de société</h1>
	<form action="#" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?= $_POST['name'] ?>">
		</div>
		<div>
			<label for="min_age">Min Age</label>
			<input type="number" name="min_age" value="<?= $_POST['min_age'] ?>">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="max_age" value="<?= $_POST['max_age'] ?>">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="min_players" value="<?= $_POST['min_players'] ?>">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="max_players" value="<?= $_POST['max_players'] ?>">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="<?= $_POST['picture'] ?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

<?php
 include_once 'inc/DBConnection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
</head>
<body>
	<?php
		$bdd = DBConnection::getInstance()->getConnection();
		if($_SERVER['REQUEST_METHOD'] = 'POST') {
	
			$name = isset($_POST['name']);
			$age_min = isset($_POST['age_min']);
			$age_max = isset($_POST['age_max']);
			$players_min = isset($_POST['players_min']);
			$players_max = isset($_POST['players_max']);
			$picture = isset($_POST['picture']);

			if (!empty($name) AND !empty($age_min) AND !empty($age_max) AND !empty($players_min) AND !empty($players_max) AND !empty($picture))
			{
				$bdd->query('INSERT INTO boardgames (name,players_min,players_max,age_min,age_max,picture) VALUES("'.$name.'","'.$players_min.'","'.$players_max.'","'.$age_min.'","'.$age_max.'","'.$picture.'"');
				
				$pop='Votre formulaire a bien été envoyé';
				echo '<script type="text/javascript">window.alert("'.$pop.'");</script>';
			}
			else 
			{
				$erreur='Erreur, il manque des valeurs';
				echo '<script type="text/javascript">window.alert("'.$erreur.'");</script>';
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

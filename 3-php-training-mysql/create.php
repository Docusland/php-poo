<?php include 'inc/DBConnection.php';
   
	$db_connection = DBConnection::getInstance();
	$sql = "INSERT INTO `boardgames` (`name`, `players_min`, `players_max`, `age_min`, `age_max`, `picture`) VALUES (?,?,?,?,?,?)"; 
	$msg="";

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
			$name= $_POST['name'];
			$age_min= $_POST['age_min'];
			$age_max= $_POST['age_max'];
			$players_min= $_POST['players_min'];
			$players_max= $_POST['players_max'];
			$picture=$_POST['picture'];
		
$stmt = $db_connection->getConnection()->prepare ($sql)->execute ([$name,$age_min,$age_max,$players_min,$players_max,$picture]);

$msg="Well Done !!!";
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
			<input type="number" name="age_min" value="">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="age_max" value="">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="players_min" value="">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="players_max" value="">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
	<?php if ($msg) {echo "<p>$msg</p>";} ?>
</body>
</html>

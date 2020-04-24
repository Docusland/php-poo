<?php
include 'inc/DBConnection.php';
include 'inc/Boardgame.php';
$db_conn = DBConnection::getInstance()->getConnection();
$sql = 'UPDATE boardgames SET name = :name, players_min = :players_min, players_max = :players_max, age_min = :age_min, age_max = :age_max, picture = :picture WHERE id = :id';
$msg = '';
$donnees = [];

if (isset($_GET['id'])) {
	if (!empty($_POST)) {
		$name = $_POST['name'] ?? '';
		$min_age = $_POST['min_age'] ?? '';
		$max_age = $_POST['max_age'] ?? '';
		$min_players = $_POST['min_players'] ?? '';
		$max_players = $_POST['max_players'] ?? '';
		$picture = $_POST['picture'] ?? '';
		$stmt = $db_conn->prepare($sql);
		$status = $stmt->execute(
			[	':name' => $name, 
				':players_min' => $min_players, 
				':players_max' => $max_players, 
				':age_min' => $min_age, 
				':age_max' => $max_age, 
				':picture' => $picture, 
				':id' => $_GET['id']
			]);
		if ($status) {
			$msg = 'Mise à jour effectuée';
		} else {
			$msg = $stmt->errorCode().': Il y a eu un problème lors de la mise à jour.';
			error_log( print_r( $stmt->errorInfo() ) );
		}

	}
	// Load the object to edit
	$stmt= $db_conn->prepare('SELECT * FROM boardgames WHERE id = ?');
	$stmt->execute([$_GET['id']]);
	$donnees = $stmt->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
} else {
	header('Location: read.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modififier un jeu de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body  class='container'>
	<a href="./read.php">Liste des données</a>
	<h1>Modifier un jeu de société</h1>
	<?php foreach ($donnees as $donnee): ?>
	<form action="update.php?id=<?=$donnee->getId()?>" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?=$donnee->getId()?>">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control" type="text" name="name" value="<?=$donnee->getName()?>">
		</div>
		<div class="form-group">
			<label for="min_age">Min Age</label>
			<input class="form-control" type="number" name="min_age" value="<?=$donnee->getAgeMin()?>">
		</div>
		<div class="form-group">
			<label for="max_age">Max Age</label>
			<input class="form-control" type="number" name="max_age" value="<?=$donnee->getAgeMax()?>">
		</div>
		<div class="form-group">
			<label for="min_players">Min Players</label>
			<input class="form-control" type="number" name="min_players" value="<?=$donnee->getPlayersMin()?>">
		</div>
		<div class="form-group">
            <label for="max_players">Max Players</label>
            <input class="form-control" type="number" name="max_players" value="<?=$donnee->getPlayersMax()?>">
        </div>
		<div class="form-group">
			<label for="picture">URL of a picture</label>
			<input class="form-control" type="text" name="picture" value="<?=$donnee->getPicture()?>">
		</div>
		<button type="submit" name="button" class='btn btn-primary'>Envoyer</button>
	</form>
	<?php endforeach; ?>
	<?php if ($msg) { echo "<p>$msg</p>";}?>
</body>
</html>

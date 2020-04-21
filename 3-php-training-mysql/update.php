<?php
include 'inc/DBConnection.php';
$db_conn = DBConnection::getInstance();
$sql = 'UPDATE boardgames SET id = ?, name = ?, players_min = ?, players_max = ?, age_min = ?, age_max = ?, picture = ? WHERE id = ?';
$msg = '';

if (isset($_GET['id'])) {
	if (!empty($_POST)) {
		$id = isset($_POST['id']) ? $_POST['id'] : null;
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$min_age = isset($_POST['min_age']) ? $_POST['min_age'] : '';
		$max_age = isset($_POST['max_age']) ? $_POST['max_age'] : '';
		$min_players = isset($_POST['min_players']) ? $_POST['min_players'] : '';
		$max_players = isset($_POST['max_players']) ? $_POST['max_players'] : '';
		$picture = isset($_POST['picture']) ? $_POST['picture'] : '';
		$stmt = $db_conn->prepare($sql)->execute([$id, $name, $min_players, $max_players, $min_age, $max_age, $picture, $_GET['id']]);
		$msg = 'Modification réussie';
	}
	$stmt = $db_conn->prepare('SELECT * FROM boardgames WHERE id = ?');
	$stmt->execute([$_GET['id']]);
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	if (!$data) {
		exit('Aucun jeu n\'existe avec cet ID');
	}
} else {
	exit('Aucun ID renseigné');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modififier un jeu de société</title>
</head>
<body>
	<a href="./read.php">Liste des données</a>
	<h1>Modifier un jeu de société</h1>
	<form action="#" method="post">
		<div>
			<label for="id">Name</label>
			<input type="number" name="id" value="<?=$data['id']?>">
		</div>
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?=$data['name']?>">
		</div>
		<div>
			<label for="min_age">Min Age</label>
			<input type="number" name="min_age" value="<?=$data['age_min']?>">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="max_age" value="<?=$data['age_max']?>">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="min_players" value="<?=$data['players_min']?>">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="max_players" value="<?=$data['players_max']?>">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="<?=$data['picture']?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
	<?php if ($msg) { echo "<p>$msg</p>";}?>
</body>
</html>

<?php
	include './inc/Boardgame.php';
	include './inc/DBConnection.php';

	if(!isset($_GET['edit']) || empty($_GET['edit']) || !is_numeric($_GET['edit']))
	{
		return header('location: ./read.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modififier un jeu de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php
		$id = $_GET['edit'];
        $DBConnection = DBConnection::getInstance();
		$connection = $DBConnection->getConnection();
		$query = $connection->prepare("SELECT * FROM boardgame WHERE id = ?");
		$query->execute(array($id));
		$query->setFetchMode(PDO::FETCH_CLASS, 'Boardgame');
		$boardgame = $query->fetch();
		
		if($query->rowCount() < 1)
		{
			return header('location: ./read.php');
		}

		if('POST' == $_SERVER['REQUEST_METHOD']) 
		{
			$update_boardgame = new Boardgame($_POST);
			if(count($update_boardgame->getErrors()) < 1)
			{
				$name = (!empty($_POST['name']) ? $_POST['name'] : '');
				$players_min = (!empty($_POST['min_players']) ? $_POST['min_players'] : '');
				$players_max = (!empty($_POST['max_players']) ? $_POST['max_players'] : '');
				$age_min = (!empty($_POST['min_age']) ? $_POST['min_age'] : '');
				$age_max = (!empty($_POST['max_age']) ? $_POST['max_age'] : '');
				$picture = (!empty($_POST['picture']) ? $_POST['picture'] : '');

				$query = $connection->prepare("UPDATE boardgame
				SET name = :name,players_min = :players_min,players_max = :players_max,age_min = :age_min,age_max = :age_max,picture = :picture
				WHERE id = :id
				");
				
				
				$query->bindParam(':name',$name);
				$query->bindParam(':players_min',$players_min);
				$query->bindParam(':players_max',$players_max);
				$query->bindParam(':age_min',$age_min);
				$query->bindParam(':age_max',$age_max);
				$query->bindParam(':picture',$picture);
				$query->bindParam(':id',$id);
				$query->execute();
				$query->closeCursor();
				?>
				<div class="alert alert-success" role="alert" style="margin:10px;">
				your boardgame has been modified !
				</div>
				<?php
			}
			else
			{
				$errors = $update_boardgame->getErrors();
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

	<div class="container">
	<a href="./read.php">Liste des données</a>
	<h1>Modifier un jeu de société</h1>

	<form action="#" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" value="<?= $boardgame->getName() ?>">
		</div>
		<div>
			<label for="min_age">Min Age</label>
			<input type="number" class="form-control" name="min_age" value="<?= $boardgame->getMinAge() ?>">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" class="form-control" name="max_age" value="<?= $boardgame->getMaxAge() ?>">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" class="form-control" name="min_players" value="<?= $boardgame->getMinPlayers() ?>">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" class="form-control" name="max_players" value="<?= $boardgame->getMaxPlayers() ?>">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" class="form-control" name="picture" value="<?= $boardgame->getPicture() ?>">
		</div>
		<button type="submit" class="btn btn-success" name="button">Envoyer</button>
	</form>
	</div>
</body>
</html>

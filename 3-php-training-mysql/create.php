<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
	<?php
		if('POST' == $_SERVER['REQUEST_METHOD']) {
		}
	?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./read.php">Liste <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Ajouter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Modifier</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Supprimer</a>
      </li>
    </ul>
  </div>
</nav>

	<h1 class="mx-auto">Ajouter un jeu de société</h1>
	<form action="inc/recup_donne_form.php" method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="age_min">Min Age:</label>
			<input type="number" name="age_min" value="">
		</div>
		<div>
			<label for="age_max">Max Age:</label>
			<input type="number" name="age_max" value="">
		</div>
		<div>
			<label for="players_min">Min Players:</label>
			<input type="number" name="players_min" value="">
		</div>
		<div>
            <label for="players_max">Max Players:</label>
            <input type="number" name="players_max" value="">
        </div>
		<div>
			<label for="picture">URL of a picture:</label>
			<input type="text" name="picture" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

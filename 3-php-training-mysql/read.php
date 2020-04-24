<?php
    include_once 'inc/DBConnection.php';
    include_once 'inc/Boardgame.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body class='container'>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <div class="row">
      <a class='btn btn-primary' href='create.php'>Ajouter un jeu </a>
    </div>

    <div class="row mt-2">
    <?php
    $bdd = DBConnection::getInstance()->getConnection();
    $games = $bdd->query('select * from boardgames')->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
    foreach($games as $game) {
      $id = $game->getId();
      $name = $game->getName();
      $playerMin = $game->getPlayersMin();
      $playerMax = $game->getPlayersMax();
      $ageMin = $game->getAgeMin();
      $ageMax = $game->getAgeMax();
      $picture = $game->getPicture();
      
      $html = <<<EOT
      <div class="card col-6 col-lg-3">
        <img src="$picture" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">$name</h4>
          <p> Nombre de joueurs : $playerMin - $playerMax</p>
          <p> Age recommandé : $ageMin - $ageMax</p>
          <a href="update.php?id=$id" class='btn btn-primary'>Modifier</a>
          <a href="delete.php?id=$id" class='btn btn-danger'>Supprimer</a>
        </div>
      </div>
      EOT;

      echo $html;
    }
    ?>
    </div>
  </body>
</html>

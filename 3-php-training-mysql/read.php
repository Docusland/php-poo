<?php
    include_once 'inc/DBConnection.php';
    include_once 'inc/Boardgame.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <?php
    $bdd = DBConnection::getInstance()->getConnection();
    $games = $bdd->query('select * from boardgames')->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
    foreach ($games as$key => $game) {

      echo "<div class='container'>";
      echo "<div class='Name'>".$game->getName()."</div>";
      echo "<div class='PlayersMin'>"."PlayersMin : ".$game->getPlayersMin()."</div>";
      echo "<div class='PlayersMax'>"."PlayersMax : ".$game->getPlayersMax()."</div>";
      echo "<div class='AgeMin'>"."AgeMin : ".$game->getAgeMin()."</div>";
      echo "<div class='AgeMax'>"."AgeMax : ".$game->getAgeMax()."</div>";
      echo "<img src=".$game->getPicture().">";
      echo "</div>";
      
    }
    ?>
  </body>
</html>

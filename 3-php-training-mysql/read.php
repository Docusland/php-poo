<?php
include 'inc/Boardgame.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <?php
        $bdd = DBConnection::getInstance()->getConnection();
        $games = $bdd->query('select * from boardgames', PDO::FETCH_CLASSTYPE)->fetchAll(PDO::FETCH_CLASS, "boardgames"); // ça marche pas
        /*foreach ($games as $game)
        {
            $boardgame = new Boardgames($game);
            echo $boardgame;
        }*/
    ?>
  </body>
</html>

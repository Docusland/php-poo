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
        $bdd = DBConnection::getInstance();
        $connection = $bdd->getConnection()->query('select * from boardgames');
        $games = $connection->fetchAll(PDO::FETCH_CLASS, Boardgames::class);// ça marche pas
        /*foreach ($games as $game)
        {
            foreach ($game as $value)
            {
                echo $value."<br>";
            }
        }*/
    ?>
  </body>
</html>

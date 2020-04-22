<?php
    include_once 'inc/DBConnection.php';
    include_once 'inc/Boardgame.php';
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
    $games = $bdd->query('select * from boardgames')->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
    foreach ($games as $game) {
    };
    ?>
  </body>
</html>

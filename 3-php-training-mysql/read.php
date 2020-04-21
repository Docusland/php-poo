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
      include 'inc/DBConnection.php';
      include 'inc/Boardgame.php';
      $bdd = DBConnection::getInstance()->getConnection(); //connexion a la base de données
      $games = $bdd->query('select * from boardgames')->fetchAll(PDO::FETCH_CLASS); //on va chercher les données pour les mettre sur la page
      foreach($games as $game) {
        foreach($game as $key => $value){
          echo $value."<br>";
        }
      }
    ?>
  </body>
</html>
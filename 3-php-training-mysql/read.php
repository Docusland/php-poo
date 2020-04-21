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

    $bdd =DBConnection::getInstance()->getConnection();
          
      $recup=$bdd->query('SELECT * FROM boardgames');
      $recup->setFetchMode(PDO::FETCH_CLASS, Boardgame::class);

      
         while ($donnees = $recup->fetch())
    {
      
        echo  "l'id = ".$donnees->id.'<br>'.
              ' name = '.$donnees->name.'<br>'.
              'player min = '. $donnees->players_min.'<br>'.
              ' players max =  '.$donnees->players_max.'<br>'.
              " age min = ".$donnees->age_min.'<br>'.
              " age max = ".$donnees->age_max.'<br>'.
              ' <img src ='.$donnees->picture." ><br>";
    }
    $recup->closeCursor();  
  ?>
  </body>
</html>

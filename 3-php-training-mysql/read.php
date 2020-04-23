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
    include "inc/DBConnection.php";
    include "inc/Boardgame.php";
    $bdd = DBConnection::getInstance()->getConnection();

    $boardgames = $bdd->query('SELECT * FROM boardgames')->fetchAll();

    foreach ($boardgames as $key => $game) 
    {
      $boardgame= new Boardgame($game);
  
      $html = " 

      <div class='card' style='width: 18rem;'>

      <img class='card-img-top' src='$game[6]' alt='Card image cap'>

      <div class='card-body'>

      <h5 class='card-title'>$game[1]</h5>

      <p class='card-text'>Nombre de joueur Minimum : $game[2]</p>
      <p class='card-text'>Nombre de joueur Maximum : $game[3]</p>
      <p class='card-text'>Age du joueur Minimum : $game[4]</p>
      <p class='card-text'>Age du joueur Minimum : $game[5]</p>


      </div>
      </div>
      ";

      echo $html;
    }
  
    ?>
  </body>
</html>

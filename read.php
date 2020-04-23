<?php
include 'inc/DBConnection.php';


$bdd = DBConnection::getInstance();
$stmt=$bdd->getConnection()->query('SELECT * FROM boardgames');
$donnees=$stmt->fetchAll();

?>

<!DOCTYPE html>
<html> 
  <head>
  
    <meta charset="utf-8">
      <title>Jeux de sociétés</title>
      <link rel ="stylesheet" href="style/style.css">
  </head>

  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux-->

    <table class="tableau">
      <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Min joueur</td>
        <td>Max joueur</td>
        <td>Age min</td>
        <td>Age max</td>
        <td>Image</td>
      </tr>

        <?php foreach ($donnees as $donnee): ?>
      <tr>
        <td><?=$donnee['id']?></td>
        <td><?=$donnee['name']?></td>
        <td><?=$donnee['players_min']?></td>
        <td><?=$donnee['players_max']?></td>
        <td><?=$donnee['age_min']?></td>
        <td><?=$donnee['age_max']?></td>
        <td><img class="image" src="<?=$donnee['picture']?>"></td>
    
       <?php endforeach; ?>
      </tr>
    </table>

  </body>
</html>
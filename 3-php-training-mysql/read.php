<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
  </body>
</html>

<?php 
include 'inc/DBConnectiion.php';
function readBoardGames()
{
  $bdd = DBConnection::getInstance()->getConnection();
  $reponse = $bdd->query('select * from boardgames');
  $raws = $bdd->query($reponse);
  {
    while($row = $sth->fetch()) { 
      print_r($row) ; 
      echo $row['id'];
      }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Liste de jeux de société</h1>
    <table>
      <thead>
        <tr>
          <td>#</td>
          <td>Nom</td>
          <td>Joueur min</td>
          <td>Joueur max</td>
          <td>Age min</td>
          <td>Age max</td>
          <td>image</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($donnees as $donnee): ?>
        <tr>
          <td><?=$donnee['id']?></td>
          <td><?=$donnee['name']?></td>
          <td><?=$donnee['player_min']?></td>
          <td><?=$donnee['player_max']?></td>
          <td><?=$donnee['age_min']?></td>
          <td><?=$donnee['age_max']?></td>
          <td><img src="<?=$donnee['picture']?>"></td>
          <td>
            <a href="update.php?id=<? $donnee['id']?>">Modifier</a>
            <a href="delete.php?id=<? $donnee['id']?>">Supprimer</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
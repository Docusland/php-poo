<?php 
  include 'inc/DBConnection.php';
  $bdd = DBConnection::getInstance();
  $reponses = $bdd->getConnection()->query('SELECT * FROM boardgames');
  $donnees= $reponses->fetchall(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    
      <div class="main1">
        <span class="cell">id</span>
        <span class="cell">Nom</span>
        <span class="cell">Joueur min</span>
        <span class="cell">Joueur max</span>
        <span class="cell">Age min</span>
        <span class="cell">Age max</span>
      </div>
      <?php foreach($donnees as $donnee): ?>
      <div class="main">
      <div class="tableau"><?=$donnee['id']?></div>
      <div class="tableau"><?=$donnee['name']?></div>
      <div class="tableau"><?=$donnee['players_min']?></div>
      <div class="tableau"><?=$donnee['players_max']?></div>
      <div class="tableau"><?=$donnee['age_min']?></div>
      <div class="tableau"><?=$donnee['age_max']?></div>
      <div><img src="<?=$donnee['picture']?>"></div>
      <div class="tableau"><a href="update.php?id=<?$donnee['id']?>">Modifier</a></div>
      <div class="tableau"><a href="delete.php?id=<?$donnee['id']?>">Supprimer</a></div>
      </div>
   
    <?php endforeach; ?>
  </body>
</html>

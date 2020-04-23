 <?php include 'inc/DBConnection.php';
   
    $db_connection = DBConnection::getInstance();

    $stmt = $db_connection->getConnection()->query('SELECT * FROM boardgames');
    $donnees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>

    <div class="content">
      <p>#</p><br>
      <p>Nom</p>
      <p>Joueur min</p>
      <p>Joueur max</p>
      <p>Age min</p>
      <p>Age max</p>
      <p>Image</p>

    </div>

<?php foreach($donnees as $donnee): ?>

<p><?=$donnee['id']?></p>
<p><?=$donnee['name']?></p>
<p><?=$donnee['players_min']?></p>
<p><?=$donnee['players_max']?></p>
<p><?=$donnee['age_min']?></p>
<p><?=$donnee['age_max']?></p>
<img src="<?=$donnee['picture']?>">

<?php endforeach ; ?> 
  </body>
</html>

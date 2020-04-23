<?php
	include './inc/Boardgame.php';
	include './inc/DBConnection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php
        $DBConnection = DBConnection::getInstance();
        $connection = $DBConnection->getConnection();
        $boardgames = $connection->query('SELECT * FROM boardgame');
        $boardgames->setFetchMode(PDO::FETCH_CLASS, 'Boardgame');
    ?>


    <div class="container" style="margin-top:100px">
    <h1>Liste des jeux de société</h1>
      <div class="row">
      
      <?php foreach ($boardgames as $boardgame): ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= $boardgame->getPicture() ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $boardgame->getName() ?></h5>
          <p class="card-text">
          <strong style="color:red">Min Players :</strong> <?= $boardgame->getMinPlayers() ?>
          <strong style="color:green">Max players :</strong> <?= $boardgame->getMaxPlayers() ?><br>
          <strong style="color:red">age min :</strong> <?= $boardgame->getMinAge() ?>
          <strong style="color:green">age max :</strong> <?= $boardgame->getMaxAge() ?>
          </p>
          <a href="./update.php?edit=<?= $boardgame->getId() ?>" class="btn btn-primary">UPDATE</a>
          <a href="./delete.php?id=<?= $boardgame->getId() ?>" class="btn btn-danger">DELETE</a>
        </div>
      </div>
    <?php endforeach; ?>
  
   </div>
  </div>
    
  </body>
</html>

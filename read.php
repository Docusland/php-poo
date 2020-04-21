<?php 
 
include 'inc/DBConnection.php';

function readBoardgames(){
$bdd = DBConnection::getInstance()->getConnection();
$reponses = $bdd->query('select* from boardgames')->fetchAll();
$bdd->query($reponse);{
 /*$row=1;
   while ($row <= $id) {
        echo $row;
         $row++;
       }
     return($row);
  }
}*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
      <div>*</div>
      <div>nom</div>
      <div>players_min</div>
      <div>players_max</div>
      <div>age_min</div>
      <div>age_max</div>
      <div>picture</div>
   
  <?php foreach ($reponses as $reponse): ?>
    
      <div><?=$reponse['id']?></div>
      <div><?=$reponse['players_min']?></div>
      <div><?=$reponse['players_max']?></div>
      <div><?=$reponse['age_min']?></div>
      <div><?=$reponse['age_max']?></div>
      <div><?=$reponse['picture']?></div>

  <?php endforeach; ?>
  </body>
  
  
</html>


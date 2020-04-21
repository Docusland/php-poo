<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <?php echo $reponse; ?>
  </body>
</html>
<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=boardgames;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * from name');
?>
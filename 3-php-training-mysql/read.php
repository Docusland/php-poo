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
    require 'inc/DBConnection.php';
    $bdd = DBConnection::getInstance()->getConnection();
    $rep=$bdd->query('SELECT * FROM boardgames')

    // $db = new PDO('mysql:host=localhost:8889;dbname=boardgames', 'root', 'root' );
    // // var_dump($db);
    // $res = $db->query('select * from boardgames')->fetchAll(); var_dump($res);
    ?>
  </body>
</html>

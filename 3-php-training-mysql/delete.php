<?php
include 'inc/DBConnection.php';
include 'inc/Boardgame.php';
$db_conn = DBConnection::getInstance();
$sql = 'SELECT * FROM boardgames WHERE id = ?';
$msg = '';

if (isset($_GET['id'])) {
    $stmt = $db_conn->getConnection()->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $donnees = $stmt->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $db_conn->getConnection()->prepare('DELETE FROM boardgames WHERE id = ?');
            $status = $stmt->execute([$_GET['id']]);
            if($status) 
                $msg = 'Vous avez bien supprimé le jeu!';
            else {
                $msg = 'Erreur lors de la suppression';
                error_log( print_r( $stmt->errorInfo() ) );
            }
        }
        header('Location: read.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Supprimer un jeu de société</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    <body class='container'>
    <?php foreach ($donnees as $donnee): ?>
    <h2>Supprimer le jeu <em><?=$donnee->getName()?></em></h2>
    <?php if ($msg) {
        echo "<p><?=$msg?></p>";
    } else {
        echo '<p>Vous êtes sûr de vouloir supprimer le jeu #'.$donnee->getId().'?</p>';?>
        <a href="delete.php?id=<?=$donnee->getId()?>&confirm=yes" class='btn btn-danger'>Oui</a>
        <a href="delete.php?id=<?=$donnee->getId()?>&confirm=no" class='btn btn-primary'>Non</a>
    <?php }?>
    <?php endforeach; ?>
    </body>
</html>

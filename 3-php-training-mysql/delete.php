<?php
/**** Supprimer un jeu de société ****/
include './inc/DBConnection.php';

if(!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id']))
{
    return header('location: ./read.php');
}

$id = $_GET['id'];
$DBConnection = DBConnection::getInstance();
$connection = $DBConnection->getConnection();

$check_boardgame = $connection->prepare("SELECT * FROM boardgame WHERE id = ?");
$check_boardgame->execute(array($id));
$boardgame = $check_boardgame->fetch();

if($check_boardgame->rowCount() < 1)
{
    return header('location: ./read.php');
}

$query = $connection->prepare("DELETE FROM boardgame WHERE id = ?");
$query->execute(array($id));

if($query)
{
    return header('location: ./read.php'); 
}

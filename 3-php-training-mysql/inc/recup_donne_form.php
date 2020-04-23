<html>
<head>
<title>just try</title>
</head>
<body>
<?php
// on teste la déclaration de nos variables
// if (isset($_POST['name']) && isset($_POST['age_min'])&& isset($_POST['age_max'])&& isset($_POST['players_min'])&& isset($_POST['players_max'])&& isset($_POST['picture'])) {
// 	// on affiche nos résultats
// 	echo 'le nom du jeux est '.$_POST['name'].'<br>'."l'age min est ".$_POST['age_min'].'<br>'."l'age max est ".$_POST['age_max'].'<br>'."le nombre de joueurs min est ".$_POST['players_min'].'<br>'."le nombre de joueurs max est ".$_POST['players_max'].'<br>'."la photo du jeu est ".$_POST['picture'];
// }
?>

<?php
require "DBConnection.php";
    $bdd = DBConnection::getInstance()->getConnection(); 

$name=$_POST['name'];
$age_min=$_POST['age_min'];
$age_max=$_POST['age_max'];
$players_min=$_POST['players_min'];
$players_max=$_POST['players_max'];
$picture=$_POST['picture'];

$sql= "INSERT INTO boardgames (name,players_min,players_max,age_min,age_max,picture) VALUES(:name,:players_min,:players_max,:age_min,:age_max,:picture)";
$prepare=$bdd->prepare($sql);
$execute=$prepare->execute(array('name'=>$name,'players_min'=>$players_min,'players_max'=>$players_max,'age_min'=>$age_min,'age_max'=>$age_max,'picture'=>$picture));

// if ( $execute== true){
//     echo 'la requete marche ';
// }
// else{
//     print_r($execute->errorInfo());
//     $execute->debugDumpParams();
// }

?>
</body>
</html>
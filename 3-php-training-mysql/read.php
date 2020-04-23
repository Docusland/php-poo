<?php
    include_once 'inc/DBConnection.php';
    include_once 'inc/Boardgame.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./read.php">Liste <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Ajouter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Modifier</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Supprimer</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h1 class="mx-auto modal-dialog-centered" data-aos="zoom-in">Liste des jeux de société</h1>
                <!-- Afficher la liste des jeux -->
                <?php
                  $bdd = DBConnection::getInstance()->getConnection();
                  $games = $bdd->query('select * from boardgames')->fetchAll(PDO::FETCH_CLASS, Boardgame::class);
                  foreach ($games as $game) {
                  ?>
                  <h1 class="col-xl-9 text-center mx-auto " data-aos="zoom-in"> <?php 
                  echo $game->getName().'<br>';
                  ?> <img src="<?php echo $game->getPicture();?>" alt="">
                  </h1>
                  <?php
                };
                ?>
            </div>
        </div>
    </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js">
  </script>
  <script>
    AOS.init();
  </script>
</body>
</html>
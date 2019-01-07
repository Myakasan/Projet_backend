<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Titillium+Web" rel="stylesheet">
  <title>L33T SH0PPING</title>
</head>

<body>
  <header class="img-fluid container-fluid">
    <?php include('./script/header.php'); ?>
  </header>

  <nav>
    <?php include('./script/nav.php'); ?>
  </nav>


  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/slide1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slide2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slide3.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
<hr>

<div class="index-card">
    <h2 class="card-title">à la une pour le black friday !</h2>
  <div class="row">
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
  <img class="card-img-top" src="./img/tee1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Lord of The Drinks</h5>
    <p class="card-text">La différence entre une bière et un chasseur, c'est que la bière, ils la font sans alcool...</p>
    <a href="./page/details.php" class="btn btn-danger">Voir l'article...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
        <img class="card-img-top" src="./img/tee2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Do It 4 Billy</h5>
          <p class="card-text">Ce que tu fais de valeureux aujourd'hui inspire les actions des autres dans le futur.</p>
          <a href="#" class="btn btn-danger">Voir l'article...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
        <img class="card-img-top" src="./img/tee3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Call me Unicorn</h5>
          <p class="card-text">Dieu existe-t-il ? Qui sait ? Y a-t-il une licorne en colère sur la face cachée de la lune ?</p>
          <a href="#" class="btn btn-danger">Voir l'article...</a>
  </div>
</div>
</div>
    </div>


  <div class="row">
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
  <img class="card-img-top" src="./img/tee4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">I'll be back !</h5>
    <p class="card-text">Toujours par deux ils vont. Ni plus, ni moins. Le maître et son tee-shirt ...</p>
    <a href="#" class="btn btn-danger">Voir l'article...</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
  <img class="card-img-top" src="./img/tee5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Level UP !</h5>
    <p class="card-text">Moins tu dors plus t'es fort ... Qu'ils disaient...</p>
    <a href="#" class="btn btn-danger">Voir l'article...</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card bg-dark text-light" style="width: 18rem;">
  <img class="card-img-top" src="./img/tee6.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Eevee's Dream</h5>
    <p class="card-text">On croit que les rêves, c’est fait pour se réaliser...</p>
    <a href="#" class="btn btn-danger">Voir l'article...</a>
  </div>
</div>
    </div>
  </div>
</div>


  <footer class="class">
    <?php include('./script/footer.php'); ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script/script.js" async charset="utf-8"></script>
</body>

</html>

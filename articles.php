
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
    <?php include('header.php'); ?>
  </header>

  <nav>
    <?php include('nav.php'); ?>
  </nav>

<div class="grid-article">

  <div class="row">
    <div class="col-2 index-card">
      <form class="form-inline-block">
        <h2 class='filtre'>Filtres</h2>
        <h4 class="filtre-quote">"Trouves moi un t-shirt jolie du c*l !"</h4>
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Couleur</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          <option selected>Couleurs</option>
          <option value="1">Noir</option>
          <option value="2">Blanc</option>
          <option value="3">Rouge</option>
        </select>

        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Marques</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          <option selected>Marques</option>
          <option value="1">Marque 1</option>
          <option value="2">Marque 2 </option>
          <option value="3">Marque 3</option>
        </select>

        <label for="customRange2">Prix Max</label>
        <input type="range" class="custom-range" min="12" max="30" id="customRange2">

        <button type="submit" class="btn btn-primary my-1 bg-danger">Valider</button>
    </div>

    <div class="index-card col-10">
        <div class="row">
          <?php
            $bdd = new PDO('mysql:host=localhost; dbname=backend','root','Password123!');
            $requete = $bdd->query('SELECT * FROM produits');

            while ($data = $requete->fetch()) {
              echo '<div class="col">
                <div class="card bg-dark text-light" style="width: 18rem;">
                  <img class="card-img-top" src="img/tee1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">'.$data["reference"].'</h5>
                      <p class="card-text">'.$data["description"].'</p>';
              echo '
                      <a href="details.php?id='.$data["id_produits"].'" class="btn btn-danger">Voir l\'article...</a>
                    </div>
                </div>
            </div>';
            }

            $requete->closeCursor();
          ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="page-nav">
        <nav class='oskur' aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link bg-danger" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link bg-danger" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-danger" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-danger" href="#">3</a></li>
            <li class="page-item"><a class="page-link bg-danger" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

</div>



  <footer class="class">
    <?php include('footer.php'); ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

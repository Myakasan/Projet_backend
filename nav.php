<?php include('server.php'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark clearfix shadow-sm">
  <a class="navbar-brand" href="#">
    <img src="./img/image10.png" width="30" height="30" class="d-inline-block align-top" alt="">
    L33T SH0PPING
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Homme
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="articles.php">T-Shirt</a>
          <a class="dropdown-item" href="#">Hoodies</a>
          <a class="dropdown-item" href="#">Pantalon</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Femme
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">T-Shirt</a>
          <a class="dropdown-item" href="#">Hoodies</a>
          <a class="dropdown-item" href="#">Pantalon</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Enfant
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">T-Shirt</a>
          <a class="dropdown-item" href="#">Hoodies</a>
          <a class="dropdown-item" href="#">Pantalon</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#loginModal"><i class="fas fa-lock"></i> Connexion</a>
      </li>

      <!-- Modal -->

      <?php
        session_start();
        

      ?> 
      
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="logmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header text-light">
        <h5 class="modal-title" id="logmodal">Connectez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-light">
        <form method="post" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Pseudo</label>
    <input type="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="username">
    <small id="emailHelp" class="form-text text-muted">Nous ne le partagerons pas !</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Pass" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-outline-primary" href="register.php" role="button">Vous n'avez pas de compte ?</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-outline-success" name="login_user">Se connecter</button>
      </div>
    </div>
  </div>
  </form>
</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart"></i> Panier</a>
    </li>
    </ul>

  </div>
</nav>

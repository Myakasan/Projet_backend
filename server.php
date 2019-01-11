<?php
// session_start();
$username = "";
$email    = "";
$errors = array();

// connexion à la bdd
$db = mysqli_connect('localhost', 'root', 'Password123!', 'backend');

// enregistrer un utilisateur
if (isset($_POST['reg_user'])) {
  // recevoir les info du formulaire
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // vérifie que le formulaire est bien rempli 
  // array push pour les erreurs correspondantes 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  // vérifie dans la bdd si les informations ne sont pas déjà dans le serveur
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // si user existe déjà
    if ($user['username'] === $username) {
      array_push($errors, "Ton pseudo est déjà pris");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Ton email est déjà enregistré");
    }
  }

  // si il n'y a pas d'erreur, enregistre l'utilisateur 
  if (count($errors) == 0) {
  	$password = md5($password_1);//script le mot de passe avant de l'enregistrer dans la bdd
  	
    $query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "connecté";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "nom d'utilisateur requis");
  }
  if (empty($password)) {
  	array_push($errors, "mot de passe requis");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "connecté";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "mauvais mot de passe/nom d'utilisateur");
  	}
  }
}

?>

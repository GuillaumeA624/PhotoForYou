<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PhotoForYou</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Liaison au fichier css de Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <script>
  (function() {
    "use strict"
    window.addEventListener("load", function() {
      var form = document.getElementById("form")
      form.addEventListener("submit", function(event) {
        if (form.checkValidity() == false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add("was-validated")
      }, false)
    }, false)
  }())
  </script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title>PhotoForYou</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Liaison au fichier css de Bootstrap -->
	<link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>  
 <header>
		<!-- nav est un élément HTML servant à la navigation -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          
          <a class="navbar-brand" href="index.php">PhotoForYou</a>
          <!-- Pour passer en mode hamburger si on est sur un petit écran -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarCollapse" aria-controls="navbarCollapse" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Photos</a>
                  <div class="dropdown-menu">
                   <a class="dropdown-item" href="#">Acheter</a>
                   <a class="dropdown-item" href="#">Vendre</a>
                   <a class="dropdown-item" href="#">Les plus populaires</a>
                   <a class="dropdown-item" href="#">Les nouveautés</a>
                  </div>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href= "index.php#tarifs">Tarifs</a>
               </li>
              </ul>

              <!-- formulaire de recherche -->
              <form class="form-inline mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Votre recherche" aria-label="rechercher">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
              </form>

              <ul class="navbar-nav mr-right">
               <li class="nav-item">
                  <a class="nav-link btn btn-outline-dark" href="connecter.php">Se connecter</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link btn btn-outline-dark" href="inscription.php">S'inscrire</a>
               </li>
              </ul>  
          </div>
      </nav>
    </header>
	<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Connexion</h1>
      <p class="lead">Merci de remplir ce formulaire de connexion.</p>
      <hr class="my-4">
      <p>Vous pouvez vous connecter en tant que client ou photographe</p>
    </div>
    <form method="post" id="form"  novalidate>

      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="email">Adresse électronique</label>
          <input type="email" class="form-control" name="EmailUser" id="EmailUser" placeholder="E-mail" required>
          <small id="info" class="form-text text-muted">Nous ne partagerons votre email.</small>
          <div class="invalid-feedback">
            Vous devez fournir un email valide.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="motDePasse1">Votre mot de passe</label>
          <input type="password" class="form-control" name="MdpUser" id="MdpUser" required>
		   <div name="message" class="invalid-feedback">
            Mot de passe invalide
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">Type d'utilisateur</label>
          <input type="text" class="form-control" name="TypeUtilisateur" id="TypeUtilisateur" placeholder="Client ou Photographe ?" required>
          <div class="invalid-feedback">
            Le champ Type d'utilisateur est obligatoire
          </div>
        </div>
      </div>

      <!-- Choix entre Client ou Photographe -->

<button class = "btn btn-primary" type="submit" name="submit">Envoyer</button>
	    </form>



<?php                                                                                     
if (isset ($_POST['submit'])) // Si on appuie sur le bouton
{

try {
$db = new PDO('mysql:host=127.0.0.1;dbname=photo', 'root', ''); // On essaye de se connecter à la bdd
}
catch (Exception $e) {
die('Erreur : ' . $e->getMessage()); // Si on y arrive pas, il y a une erreur
}

if(isset($_POST['EmailUser'])) $EmailUser=$_POST['EmailUser'];
else $EmailUser=""; 
if(isset($_POST['MdpUser'])) $MdpUser=$_POST['MdpUser'];
else $MdpUser="";
if(isset($_POST['TypeUtilisateur'])) $TypeUtilisateur=$_POST['TypeUtilisateur'];
else $TypeUtilisateur="";


$MdpUser = md5($_POST['MdpUser']); // On hashe le mdp

$query=$db->prepare('SELECT * FROM utilisateur where EmailUser = :EmailUser and MdpUser = :MdpUser and TypeUtilisateur = :TypeUtilisateur'); // On execute cette requete SQL
$query->execute(array('EmailUser'=>$EmailUser,'MdpUser'=>$MdpUser, 'TypeUtilisateur'=>$TypeUtilisateur)); // On affecte les valeurs de la bdd à nos variable 
$tab=$query->rowCount(); // On compte le nombre de résultat sortant de la requete
$session=$query->fetch();
if($tab>0 and $TypeUtilisateur == "Client"){ // Si il y a plus de 1 résultat sortant et que le TypeUtilisateur est égale à "Client", on se connecte
  $_SESSION['NomUser'] = $session['NomUser'];
  $_SESSION['EmailUser'] = $EmailUser;
  $_SESSION['MdpUser'] = $MdpUser;
  $_SESSION['TypeUtilisateur'] = $TypeUtilisateur;

  echo '<script language = "Javascript">
        document.location.replace("client.php");</script>'; // Et on envoie vers la page "client.php"
}

elseif ($tab>0 and $TypeUtilisateur == "Photographe") { // Sinon si il y a plus de 1 résultat sortant et que le TypeUtilisateur est égale à "Photogrape", on se connecte
  $_SESSION['NomUser'] = $session['NomUser'];
  $_SESSION['EmailUser'] = $EmailUser;
  $_SESSION['MdpUser'] = $MdpUser;
  $_SESSION['TypeUtilisateur'] = $TypeUtilisateur;

  echo '<script language = "Javascript">
        document.location.replace("photographe.php");</script>'; // Et on envoie vers la page "client.php"
}
else{
  echo "Mail, mot de passe ou type d'utilisateur invalide"; // Sinon, on met une erreur
}

}

 ?>
  </div>

</body>
</html>
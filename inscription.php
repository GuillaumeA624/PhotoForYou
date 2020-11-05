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
      <h1 class="display-4">Inscription</h1>
      <p class="lead">Merci de remplir ce formulaire d'inscription.</p>
      <hr class="my-4">
      <p>Vous ferez bientôt parti de nos membres. Vous avez fait le bon choix ;-)</p>
    </div>
    <form method="post" oninput='MdpUser2.setCustomValidity(MdpUser2.value != MdpUser.value ?  "Mot de passe non identique" : "")' id="form"  novalidate>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" name="PrenomUser" id="PrenomUser" placeholder="Votre prénom" required>
          <div class="invalid-feedback">
            Le champ prénom est obligatoire
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="NomUser" id="NomUser" placeholder="Votre nom" required>
          <div class="invalid-feedback">
            Le champ nom est obligatoire
          </div>
        </div>
      </div>
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
          <input type="password" class="form-control" name="MdpUser" required>
		   <div name="message" class="invalid-feedback">
            Mot de passe invalide
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="motDePasse2">Confirmation du mot de passe</label>
          <input type="password" class="form-control" name="MdpUser2" required>
          <div name="message" class="invalid-feedback">
		  Les mots de passe ne sont pas identiques
          </div>
        </div>
      </div>

      <!-- Choix entre Client ou Photographe -->
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-info">
          <input type="radio" name="Client" id="client" value="Client">
          Client
        </label>
        <label class="btn btn-info">
          <input type="radio" name="Photographe" id="Photographe" value="Photographe">
          Photographe
        </label>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="offres">
          <label class="form-check-label" for="offres">
            Oui, je veux recevoir des sources d’inspiration visuelles, des offres spéciales et autres communications par e-mail. 
          </label>
        </div>
      </div>
<button class = "btn btn-primary" type="submit" name="submit">Envoyer</button>

 
	    </form>

<?php                                                                                     
if (isset ($_POST['submit']))
{

try {
$db = new PDO('mysql:host=127.0.0.1;dbname=photo', 'root', '');
}
catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}

if (isset ($_POST['Photographe'])) // Si on clique sur "Photographe"
{

if(isset($_POST['NomUser'])) $NomUser=$_POST['NomUser'];
else $NomUser="";
if(isset($_POST['PrenomUser'])) $PrenomUser=$_POST['PrenomUser'];
else $PrenomUser="";
if(isset($_POST['EmailUser'])) $EmailUser=$_POST['EmailUser'];
else $EmailUser="";
if(isset($_POST['MdpUser'])) $MdpUser=$_POST['MdpUser'];
else $MdpUser="";
$MdpUser = $_POST['MdpUser'];
$MdpUser = md5($MdpUser);

$query=$db->prepare('INSERT INTO utilisateur (NomUser, PrenomUser, EmailUser, MdpUser, TypeUtilisateur) VALUES (:NomUser,:PrenomUser,:EmailUser,:MdpUser, "Photographe")'); // On execute cette requete SQL

// On affecte les valeurs rentrés dans la bdd 
$query->bindValue(':NomUser', $_POST['NomUser'], PDO::PARAM_STR);
$query->bindValue(':PrenomUser', $_POST['PrenomUser'], PDO::PARAM_STR);
$query->bindValue(':EmailUser', $_POST['EmailUser'], PDO::PARAM_STR);
$query->bindValue(':MdpUser', $MdpUser, PDO::PARAM_STR);
$query->execute();

}

else{ //Sinon

if(isset($_POST['NomUser'])) $NomUser=$_POST['NomUser'];
else $NomUser="";
if(isset($_POST['PrenomUser'])) $PrenomUser=$_POST['PrenomUser'];
else $PrenomUser="";
if(isset($_POST['EmailUser'])) $EmailUser=$_POST['EmailUser'];
else $EmailUser="";
if(isset($_POST['MdpUser'])) $MdpUser=$_POST['MdpUser'];
else $MdpUser="";

$MdpUser = $_POST['MdpUser'];
$MdpUser = md5($MdpUser);

$query=$db->prepare('INSERT INTO utilisateur (NomUser, PrenomUser, EmailUser, MdpUser, TypeUtilisateur) VALUES (:NomUser,:PrenomUser,:EmailUser,:MdpUser, "Client")');
$query->bindValue(':NomUser', $_POST['NomUser'], PDO::PARAM_STR);
$query->bindValue(':PrenomUser', $_POST['PrenomUser'], PDO::PARAM_STR);
$query->bindValue(':EmailUser', $_POST['EmailUser'], PDO::PARAM_STR);
$query->bindValue(':MdpUser', $MdpUser, PDO::PARAM_STR);
$query->execute();
}
}


 ?>
</div>
</body>
</html>
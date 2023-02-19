<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");
  ?>

<!--
   afficher un formulaire pré-rempli avec les informations de l'utilisateur connecté. les champs non modifiables sont désactivés:
    - nom (non modifiable)
    - prénom (non modifiable)
    - email (modifiable)
    - mot de passe (modifiable)
    - confirmation du mot de passe (modifiable)
    - adresse (modifiable)
    - code postal (modifiable)
    - ville (modifiable)
    - téléphone (modifiable)
    - date de naissance (non modifiable)
    - sexe (modifiable)
    - photo de profil (modifiable)
    - description (modifiable)
    - CV (modifiable)
    - lettre de motivation (modifiable)
    - disponibilité (modifiable)
    - statut (non modifiable)
    - date d'inscription (non modifiable)
    - date de dernière connexion (non modifiable)
    - date de dernière modification (non modifiable)
    - date de suppression (non modifiable)
-->

<?php
  if (isset($_SESSION['id'])) {
    $pdo = connectDB();
    $queryPrepared = $pdo->prepare("SELECT * FROM pharm_user WHERE id = :id");
    $queryPrepared->execute([
      "id" => $_SESSION['id']
    ]);
    $user = $queryPrepared->fetch();

    $avatar = $user['avatar'];
    $firstname = $user['firstname'];
    $lastname = $user['lastname'];
    $email = $user['email'];
    $zipCode = $user['zipCode'];
    $city = $user['city'];
    $phone = $user['phone'];

  }
?>

<form action="/forms/addUser.php" method="POST">


<div class="row mt-4">
    <div class="col-12">
        <h1 class="main-title">Inscription</h1>
    </div>
</div>

<div class="row col-lg-11 mt-4">
    <div class="col-lg-3">
        <input class="form-check-input" type="radio" name="type" id="employer" value="0"> <label class="form-label" for="employer">Je recrute</label>
        <input class="form-check-input" type="radio" name="type" id="searcher" value="1"> <label class="form-label" for="searcher">Je recherche</label>
    </div>

    <div class="col-lg-4">
        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Votre prénom" required="required">
    </div>
    <div class="col-lg-5">
        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Votre nom" required="required">
    </div>
</div><br>

<div class="row mt-3">
    <div class="col-lg-12">
        <input class="form-control" type="email" name="email" id="email" placeholder="Votre email" required="required">
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-6">
        <input class="form-control" type="password" name="pwd" id="password" placeholder="Votre mot de passe" required="required">
    </div>
    <div class="col-lg-6">
        <input class="form-control" type="password" name="pwdConfirm" id="pwdConfirm" placeholder="Confirmez votre mot de passe" required="required">
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-6">
      <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo (visible sur le forum)" required="required">
    </div>

    <div class="col-lg-6">
        <input class="form-control" type="date" name="birthdate" id="birthdate" required="required">
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12">
        <input class="form-check-input" type="checkbox" name="cgu" id="cgu" required="required">
        <label class="form-label" for="cgu">J'acceptes les <a href="">Conditions générales d'utilisation</a></label>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12">
        <input class="btn btn-primary" type="submit" value="S'inscrire">
    </div>
</div>
</form>










<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
?>
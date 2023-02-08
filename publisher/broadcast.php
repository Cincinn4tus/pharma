<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");
  ?>

<div class="container text-center wrapper">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="main-title">Créer une annonce</h1>
        </div>
    </div>

  <form action="/forms/addUser.php" method="POST">
        <div class="row col-12 mt-4">
            <div class="col-lg-6">
                <select class="form-select" name="position" id="position">
                    <option value="0">Préparateur en pharmacie</option>
                    <option value="1">Pharmacien</option>
                    <option value="2">Rayonniste</option>
                    <option value="3">Vendeur - Conseiller</option>
                </select>
            </div>

            <div class="col-lg-6">
                <input class="form-control" type="text" name="entitled" id="entitled" placeholder="Intitulé de l'offre" required="required">
            </div>
        </div>

        <div class="row col-12 mt-3">
            <div class="col-lg-2">
                <input class="form-control" name="zipCode" id="zipCode" type="text" placeholder="Code postal">
            </div>
            <div class="col-lg-4">
                <input class="form-control" name="ville" id="ville" type="text" placeholder="Ville">
            </div>
            <div class="col-lg-6">
                <input class="form-control" name="adresse" id="adresse" type="text" placeholder="Adresse">
            </div>
        </div>

        <div class="row col-12 mt-3">
            <div class="col-lg-12">
                <input class="form-control" type="email" name="email" id="email" placeholder="Votre email" required="required">
            </div>
        </div>
        <div class="row col-12 mt-3">
            <div class="col-lg-6">
                <input class="form-control" type="password" name="pwd" id="password" placeholder="Votre mot de passe" required="required">
            </div>
            <div class="col-lg-6">
                <input class="form-control" type="password" name="pwdConfirm" id="pwdConfirm" placeholder="Confirmez votre mot de passe" required="required">
            </div>
        </div>

        <div class="row col-12 mt-3">
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
</div>








<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>
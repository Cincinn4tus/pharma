<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$title = "Inscription";

  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");
  ?>




<div class="container text-center wrapper">
      <?php
				if(!empty($_SESSION['errors'])){
					print_r( $_SESSION['errors'] );
					unset($_SESSION['errors']);
					//session_destroy();
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
          <input class="form-control" type="text" name="zipcode" id="zipcode" placeholder="Votre code postal" required="required">
        </div>
        <div class="col-lg-5">
          <input class="form-control" type="text" name="city" id="city" placeholder="Votre ville" required="required">
        </div>

      </div>

      <div class="row col-lg-11 mt-4">
          <div class="col-lg-3">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="0" checked="checked"> <label class="form-label" for="gender0">Monsieur</label>
              <input class="form-check-input" type="radio" name="gender" id="gender" value="1"> <label class="form-label" for="gender1">Madame</label>
              <input class="form-check-input" type="radio" name="gender" id="gender" value="1"> <label class="form-label" for="gender2">Autre</label>
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
</div>



<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>
<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");
  ?>




<div class="container text-center">
<?php
				if(!empty($_SESSION['errors'])){
					print_r( $_SESSION['errors'] );
					unset($_SESSION['errors']);
					//session_destroy();
				}
			?>
  <div class="row">
    <h3>Inscription</h3>
  </div>
	
  <div class="row">
    <form method="POST" action="/forms/addUser.php" required="required" class="col-lg-4" id="registrer-form">
      Votre objectif
      <select name="user_role" class="form-control">
        <option value="2">Je recrute</option>
        <option value="3">Je recherche</option>
      </select><br>
      <input type="email" class="form-control" name="email" placeholder="Votre email" required="required"><br>

      <input type="text" class="form-control" name="firstname" placeholder="Votre prénom"><br>
      <input type="text" class="form-control" name="lastname" placeholder="Votre nom"><br>
      <input type="text" class="form-control" name="pseudo" placeholder="Votre pseudo (visible sur le forum)"  required="required"><br>

      Date de naissance<input type="date" class="form-control" name="birthday" placeholder="Votre date de naissance"><br>

      <input type="password" class="form-control" name="password" placeholder="Votre mot de passe"  required="required"><br>
      <input type="password" class="form-control" name="passwordConfirm" placeholder="confirmation du mot de passe 	" required="required"><br>

      <input type="checkbox" name="cgu"  required="required"> J'acceptes les <a href="">CGU</a> <br>

      <input type="submit" class="btn btn-primary" value="S'inscrire"> <br>

    </form>
  </div>


</div><br>





<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>
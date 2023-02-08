<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");  ?>

<div class="container" id="error-msg">
    <div class="row">
        <h2>
            Actuellement en maintenance
        </h2>
        <img src="/assets/img/error.png" alt="">
    </div>
</div>

<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>
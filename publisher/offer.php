<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");


  if(isConnected() && $userType == 1) {
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/candidate.php");
  } else {
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/employment.php");
  }

    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>


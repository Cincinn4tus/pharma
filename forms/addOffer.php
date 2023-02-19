<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
# check all form fields offer.php

getUserInfo();

echo $userType;

if (isset($_POST['position']) && 
    isset($_POST['entitled']) && 
    isset($_POST['dateStart']) && 
    isset($_POST['contract']) && 
    isset($_POST['salary']) && 
    isset($_POST['description']) &&
    count($_POST) == 6) {
    $position = $_POST['position'];
    $entitled = $_POST['entitled'];
    $dateStart = $_POST['dateStart'];
    $contract = $_POST['contract'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];
    }


    $errors = [];


    # si le champs "description" contient moins de 200 ou plus de 2000 caractères, alors on ajoute une erreur
    if (strlen($description) < 100) {
        $errors[] = "La description doit contenir au moins caractères";
    }
   
    # si le champs "dateStart" est vide, alors on ajoute une erreur
    if (empty($dateStart)) {
        $errors[] = "La date de début est obligatoire, sinon, indiquez celle du jour";
    }
    # si le champs "contract" est vide, alors on ajoute une erreur
    if (empty($contract)) {
        $errors[] = "Merci d'indiquer le type de contrat souhaité";
    }
    # si le champs "salary" est vide, alors on ajoute une erreur
    if (empty($salary)) {
        $errors[] = "Merci d'indiquer le salaire souhaité";
    }
    # si le champs "description" est vide, alors on ajoute une erreur
    if (empty($description)) {
        $errors[] = "Merci d'indiquer une description";
    }


    # si le tableau d'erreurs est vide, alors on ajoute l'offre dans la bdd
    if (empty($errors)) {
        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("INSERT INTO pharm_offer
         (position, entitled, dateStart, contract, salary, description, user_type) VALUES (:position, :entitled, :dateStart, :contract, :salary, :description, :user_type)");
        $queryPrepared->execute([
            "position" => $position,
            "entitled" => $entitled,
            "dateStart" => $dateStart,
            "contract" => $contract,
            "salary" => $salary,
            "description" => $description,
            "user_type" => $userType
        ]);
        header("Location: /");
    } else {
        echo "<div class='alert alert-danger' role='alert'>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo "</div>";
    }

?>
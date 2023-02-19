<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();

$robots = "noindex, follow";

$title = "Offres d'emploi";

require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";

include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");





if($userType == 0){
    $pdo = connectDB();
    $queryPrepared = $pdo->prepare("SELECT * FROM pharm_offer WHERE user_type=1");
    $queryPrepared->execute();
    $results = $queryPrepared->fetchAll();
} else if ($userType == 1){
    $pdo = connectDB();
    $queryPrepared = $pdo->prepare("SELECT * FROM pharm_offer WHERE user_type=0");
    $queryPrepared->execute();
    $results = $queryPrepared->fetchAll();
}

    foreach($results as $results){
        getUserInfoById($results['user_id']);
        ?>


<div class="container mt-4 offer">

    <div class="row">
        <div class="col-lg-3">
            <img class="avatar" src="<?php echo $userInfo['user_avatar']; ?>" alt="avatar">
        </div>
        <div class="card-body col-lg-9">
            <h5 class="card-title">
                <?php echo $results['entitled']; ?>
            </h5>
            <div class="row mt-4 main-card">
                <div class="col-lg-3">
                    <?php
                    if($results['position'] == 0){
                        echo "Préparateur en pharmacie";
                    } else if($results['position'] == 1){
                        echo "Pharmacien";
                    } else if($results['position'] == 2){
                        echo "Rayonniste";
                    } else if($results['position'] == 3){
                        echo "Autres";
                    }
                    ?>
                </div>
                <div class="col-lg-3">
                    <p class="card-text">Date de début: <?php // affiche $results['dateStart'] sous la forme mois/année
                    $date = $results['dateStart'];
                    $date = date_create($date);
                    echo date_format($date, 'm/Y');
                     ?></p>
                </div>
                <div class="col-lg-3">
                    <p class="card-text">Type de contrat: <?php
                    if($results['contract'] == 0){
                        echo "CDI";
                    } else if($results['contract'] == 1){
                        echo "CDD";
                    } else if($results['contract'] == 2){
                        echo "Remplacement";
                    }
                    ?></p>
                </div>
                <div class="col-lg-3">
                    <p class="card-text">Salaire souhaitéss: <?php echo $results['salary']; ?>€</p>
                </div>
            </div>
            <div class="row mt-3">
                <p class="card-text"><?php echo $results['description']; ?></p>
            </div>
            <div class="row mt-2">
                <?php if($results['user_type'] == 1){ ?>
                    <a href="#" class="card-link">Voir le CV</a>
                    <?php } ?>
            </div>
        </div>
    </div>

</div>
<?php
    }

include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
?>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/conf/config.inc.php";

error_reporting(E_ALL);


    function connectDB(){
        //création d'une nouvelle connexion à notre bdd
        try{
            
            $pdo = new PDO( DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT , DB_USER , DB_PWD );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        }catch(Exception $e){
            die("Erreur SQL ".$e->getMessage());
        }


        return $pdo;
    }

/***************************************************************************** 
 CONNEXION TOKEN ET SESSIONS
*****************************************************************************/




    function createToken(){
        $token = sha1(md5(rand(0,100)."gdgfm432").uniqid());
        return $token;
    }


    function updateToken($userId, $token){

        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("UPDATE pharm_user SET token=:token WHERE id=:id");
        $queryPrepared->execute(["token"=>$token, "id"=>$userId]);

    }


    function isConnected(){

        if(!isset($_SESSION["email"]) || !isset($_SESSION["token"])){
            return false;
        }
    
        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("SELECT id FROM pharm_user WHERE email=:email AND token=:token");	
        $queryPrepared->execute(["email"=>$_SESSION["email"], "token"=>$_SESSION["token"]]);
    
        return $queryPrepared->fetch();
    
    }


    function getUserInfo() {
        if (!isConnected()) {
            return false;
        }
        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("SELECT * FROM pharm_user WHERE email=:email AND token=:token");	
        $queryPrepared->execute(["email"=>$_SESSION["email"], "token"=>$_SESSION["token"]]);
    
        return $queryPrepared->fetch();
    }
    
    $userInfo = getUserInfo();
    if ($userInfo) {
        $userType = $userInfo['user_type'];
    }

    // récupère en bdd l'utilisateur dont l'id correspond à la valeur de 'user_id' dans la table pharm_offer

    function getUserInfoById($id) {
        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("SELECT * FROM pharm_user WHERE id=:id");	
        $queryPrepared->execute(["id"=>$id]);
    
        return $queryPrepared->fetch();
        $userInfo = $queryPrepared->fetchAll();
    }

    





/***************************************************************************** 
 LOGS
*****************************************************************************/
/*

    $month = "[" . date("d"). "/" . date("m") . "/" . date("y") . "]";
    $hour = "[" . date("H"). ":" . date("i") . ":" . date("s") . "]";
    $url = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];





    /* $log = $logTable["Utilisateur"] . " " . $logTable["Date"] ." " . $logTable["Heure"] . " " . $logTable["Page"] . "\n"; ss
    $log = $pseudo . "\t \t" . $month . "\t" . $hour . "\t" . $url . "\n";







    $files = fopen($_SERVER['DOCUMENT_ROOT'] ."/log.php", "a");
    fputs($files,$log);
    fclose($files);


/***************************************************************************** 
 ANALYSES
*****************************************************************************/


    /* COUNT LOGS */

    function numberOfVisits() {

        $filePath = $_SERVER['DOCUMENT_ROOT'] . "/log.txt";
        $logCount = count(file($filePath));


        echo $logCount;
                        if($logCount <= 1){
                            echo ("Action enregistrée");
                        } else {
                            echo " Actions enregistrées";
                        }
    }

    
/* COUNT USERS */

function numberOfUsers() {
    

    if (isConnected()) {
		$pdo = connectDB();

		$queryPrepared = $pdo->prepare("SELECT * FROM pharm_user WHERE id != 1");
		$queryPrepared->execute();
		$results = $queryPrepared->fetchAll();
        $userCount = sizeof($results);
        echo sizeof($results);

        if($userCount <= 1){
            echo " Utilisateur inscrit";
        } else {
            echo " Utilisateurs inscrits";
        }
    }
}







/*
function resizeImageJpeg($source, $dst, $width, $height, $quality) {
	$imageSize = getimagesize($source);
	$imageRessource = imagecreatefromjpeg($source);
	$imageFinal = imagecreatetruecolor($width, $height);
	$final = imagecopyresampled($imageFinal, $imageRessource, 0, 0, 0, 0, $width, $height, $imageSize[0], $imageSize[1]);

	imagejpeg($imageFinal, $dst, $quality);
}


function resizeImagePng($source, $dst, $width, $height, $quality) {
	$imageSize = getimagesize($source);
	$imageRessource = imagecreatefrompng($source);
	$imageFinal = imagecreatetruecolor($width, $height);
	$final = imagecopyresampled($imageFinal, $imageRessource, 0, 0, 0, 0, $width, $height, $imageSize[0], $imageSize[1]);

	imagepng($imageFinal, $dst, $quality);
}

function resizeImageGif($source, $dst, $width, $height, $quality) {
	$imageSize = getimagesize($source);
	$imageRessource = imagecreatefromgif($source);
	$imageFinal = imagecreatetruecolor($width, $height);
	$final = imagecopyresampled($imageFinal, $imageRessource, 0, 0, 0, 0, $width, $height, $imageSize[0], $imageSize[1]);

	imagegif($imageFinal, $dst, $quality);
}
*/




<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";



//récupérer les données du formulaire
$gender = $_POST["gender"];
$type = $_POST["type"];
$zipcode = $_POST["zipcode"];
$city = $_POST["city"];
$avatar = "./assets/img/default_avatar.png";
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$pseudo = $_POST["pseudo"];
$pwd = $_POST["pwd"];
$pwdConfirm = $_POST["pwdConfirm"];
$birthday = $_POST["birthdate"];
$cgu = $_POST["cgu"];



//nettoyer les données

$email = strtolower(trim($email));
$firstname = ucwords(strtolower(trim($firstname)));
$lastname = mb_strtoupper(trim($lastname));
$pseudo = ucwords(strtolower(trim($pseudo)));


//vérifier les données
$errors = [];




// ROLE


if($type !=0 && $type !=1){
    $errors[] = "Choisir le type de compte";
}



//Email OK
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[] = "Email incorrect";
}else{

	//Vérification l'unicité de l'email
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id from pharm_user WHERE email=:email");

	$queryPrepared->execute(["email"=>$email]);
	
	if(!empty($queryPrepared->fetch())){
		$errors[] = "L'email existe déjà en bdd";
	}


}

//prénom : Min 2, Max 45 ou empty
if( strlen($firstname)==1 || strlen($firstname)>45 ){
	$errors[] = "Votre prénom doit faire plus de 2 caractères";
}

//nom : Min 2, Max 100 ou empty
if( strlen($lastname)==1 || strlen($lastname)>100 ){
	$errors[] = "Votre nom doit faire plus de 2 caractères";
}

//pseudo : Min 4 Max 60
if( strlen($pseudo)<4 || strlen($pseudo)>60 ){
	$errors[] = "Votre pseudo doit faire entre 4 et 60 caractères";
}

//Date anniversaire : YYYY-mm-dd
//entre 16 et 100 ans
$birthdayExploded = explode("-", $birthday);


	$age = (time() - strtotime($birthday))/60/60/24/365.2425;
	if($age < 16 || $age > 100){
		$errors[] = "Vous êtes trop jeune ou trop vieux";
	}


/*
//Mot de passe : Min 8, Maj, Min et chiffre
if(strlen($pwd) < 8 ||
preg_match("#\d#", $pwd)==0 ||
preg_match("#[a-z]#", $pwd)==0 ||
preg_match("#[A-Z]#", $pwd)==0 
) {
	$errors[] = "Votre mot de passe doit faire plus de 8 caractères avec une minuscule, une majuscule et un chiffre";
}
*/

//Confirmation : égalité
if( $pwd != $pwdConfirm){
	$errors[] = "Votre mot de passe de confirmation ne correspond pas";
}




if(count($errors) == 0){
	$queryPrepared = $pdo->prepare("INSERT INTO pharm_user (email,user_avatar, user_type, firstname, lastname, pseudo, birthday, pwd, zip_code, city, gender) 
		VALUES ( :email ,:user_avatar, :user_type, :firstname, :lastname, :pseudo, :birthday, :pwd, :zip_code, :city, :gender)");


	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$queryPrepared->execute([
								"email"=>$email,
								"user_avatar"=> $avatar,
                                "user_type"=>$type,
								"firstname"=>$firstname,
								"lastname"=>$lastname,
								"pseudo"=>$pseudo,
								"birthday"=>$birthday,
								"pwd"=>$pwd,
								"zip_code"=>$zipcode,
								"city"=>$city,
								"gender"=>$gender
							]);




	header("Location: /index.php");	

}else{ 
	$_SESSION['errors'] = $errors;
	header("Location: /user/registrer.php");
}

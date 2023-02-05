<?php
session_start();
require "functions.php";





//récupérer les données du formulaire
$avatar = "./assets/img/default_avatar.png";
$role = $_POST["user_role"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$pseudo = $_POST["pseudo"];
$pwd = $_POST["password"];
$pwdConfirm = $_POST["passwordConfirm"];
$birthday = $_POST["birthday"];
$country = $_POST["country"];
$cgu = $_POST["cgu"];



//nettoyer les données

$email = strtolower(trim($email));
$firstname = ucwords(strtolower(trim($firstname)));
$lastname = mb_strtoupper(trim($lastname));
$pseudo = ucwords(strtolower(trim($pseudo)));


//vérifier les données
$errors = [];




// ROLE


if($role !=2 && $role !=3){
    $errors[] = "Choisir le type de compte";
}



//Email OK
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[] = "Email incorrect";
}else{

	//Vérification l'unicité de l'email
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id from baudrien_user WHERE email=:email");

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

if( count($birthdayExploded)!=3 || !checkdate($birthdayExploded[1], $birthdayExploded[2], $birthdayExploded[0])){
	$errors[] = "date incorrecte";
}else{
	$age = (time() - strtotime($birthday))/60/60/24/365.2425;
	if($age < 16 || $age > 100){
		$errors[] = "Vous êtes trop jeune ou trop vieux";
	}
}


//Mot de passe : Min 8, Maj, Min et chiffre
if(strlen($pwd) < 8 ||
preg_match("#\d#", $pwd)==0 ||
preg_match("#[a-z]#", $pwd)==0 ||
preg_match("#[A-Z]#", $pwd)==0 
) {
	$errors[] = "Votre mot de passe doit faire plus de 8 caractères avec une minuscule, une majuscule et un chiffre";
}


//Confirmation : égalité
if( $pwd != $pwdConfirm){
	$errors[] = "Votre mot de passe de confirmation ne correspond pas";
}

//Pays
$countryAuthorized = ["fr", "ml", "pl"];
if( !in_array($country, $countryAuthorized) ){
	$errors[] = "Votre pays n'existe pas";
}


if(count($errors) == 0){

	



	$queryPrepared = $pdo->prepare("INSERT INTO baudrien_user (email,user_avatar, user_role, firstname, lastname, pseudo, country, birthday, pwd) 
		VALUES ( :email ,:user_avatar, :user_role, :firstname, :lastname, :pseudo, :country, :birthday, :pwd );");


	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$queryPrepared->execute([
								"email"=>$email,
								"user_avatar"=> $avatar,
                                "user_role"=>$role,
								"firstname"=>$firstname,
								"lastname"=>$lastname,
								"pseudo"=>$pseudo,
								"country"=>$country,
								"birthday"=>$birthday,
								"pwd"=>$pwd
							]);

	header("Location: ./index.php");	

}else{
	$_SESSION['errors'] = $errors;
	header("Location: ./register.php");
}

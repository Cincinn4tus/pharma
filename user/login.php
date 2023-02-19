<?php
    error_reporting(E_ALL); ini_set('display_errors', 'On'); 
	session_start();
    require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
?>
			<?php

				if( !empty($_POST['email']) &&  !empty($_POST['pwd']) && count($_POST)==2 ){

					//Récupérer en bdd le mot de passe hashé pour l'email provenant du formulaire


					$pdo = connectDB();
					$queryPrepared = $pdo->prepare("SELECT * FROM pharm_user WHERE email=:email");
					$queryPrepared->execute(["email"=>$_POST['email']]);
					$results = $queryPrepared->fetch();

					if(!empty($results) && password_verify($_POST['pwd'], $results['pwd'])){
						

						$token = createToken();
						updateToken($results["id"], $token);

						//Insertion dans la session du token
                        
                        $_SESSION['pseudo'] = $results["pseudo"];
						$_SESSION['email'] = $_POST['email'];
						$_SESSION['id'] = $results["id"];
						$_SESSION['token'] = $token;



						header("Location: /index.php");


					}else{
						echo "Identifiants incorrects";
					}

				}

			?>

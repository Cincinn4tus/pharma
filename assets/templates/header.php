<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Recherchez et recrutez les futurs membre de votre équipe officinale">

  <title>Pharma-emploi</title>
  <meta content="préparateur / préparatrice en pharmacie, pharmacien, pharmacienne, emploi" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/custom.style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@pharma-emploi.fr">contact@pharma-emploi.fr</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>01 02 03 04 05</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">Pharma<span class="logo-span">-</span>emploi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Accueil</a></li>
          <li><a class="nav-link scrollto" href="forum/main.php">Forum</a></li>
          <?php
          if(isConnected() && $userType == 1) {
            ?>
          <li><a class="nav-link scrollto" href="#services">Publier une offre</a></li>
          <li><a class="nav-link scrollto" href="#services">Chercher un candidat</a></li>
          <?php } else { ?>
          <li><a class="nav-link scrollto" href="/publisher/broadcast.php">Rechercher une offre</a></li>
          <li><a class="nav-link scrollto" href="/publisher/broadcast.php">Publier une annonce</a></li>
          <?php } ?>

          
          <li><a class="nav-link scrollto " href="#contact">Contact</a></li>
          <?php
            if(isConnected()) {
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mon profil
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Vue d'ensemble</a></li>
                <li><a class="dropdown-item" href="#">Messagerie</a></li>
                <li><a class="dropdown-item" href="#">Visio</a></li>
                <li><a class="dropdown-item" href="#">Informations</a></li>
                <li><a class="dropdown-item" href="#">Paramètres</a></li>
                <li><a class="dropdown-item" href="/user/logout.php">Deconnexion</a></li>
              </ul>
            </li>
            <?php } else { ?>
                <button class="btn-get-started" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</button>
            <?php
            }
              ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->




        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal">Connexion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <form id="form" method="POST" action="/user/login.php">
                            <input type="email" class="form-control" name="email" placeholder="Votre email" required="required"><br>
                            <input type="password" class="form-control" name="pwd" placeholder="Mot de passe" required="required"><br>
                        
                            <a href="#">
                                <button class="btn btn-starter">
                                    Mot de passe oublié ?
                                </button>
                            </a>
                    </div>
                    <div class="modal-footer">
                        <a href="/user/registrer.php">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">S'inscrire</button>
                        </a>
                        
                        <button type="submit" class="btn btn-primary">
                            Se connecter
                        </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
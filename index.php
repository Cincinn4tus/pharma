<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/conf/functions.php";
  include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/header.php");
  ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenue sur <span>Pharma-emploi</span></h1>
      <h2><strong>Une nouvelle façon de se connecter à des opportunités de carrière en pharmacie</strong></h2>
      <div class="d-flex">
        <a href="/user/registrer.php" class="btn-get-started scrollto">S'inscrire</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Regarder la vidéo</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-conversation"></i></div>
              <h4 class="title"><a href="">Forum</a></h4>
              <p class="description">Discutez avec les autres membres, créez des fils de discussions privés et ajoutez vos confrères</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxs-file-pdf"></i></div>
              <h4 class="title"><a href="">CV</a></h4>
              <p class="description">Téléchargez et consultez les CV de vos candidats</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-message"></i></div>
              <h4 class="title"><a href="">Messagerie</a></h4>
              <p class="description">Avec la messagerie, vous pouvez discuter directement sur la plateforme avec les candidats qui vous intéressent</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-webcam"></i></div>
              <h4 class="title"><a href="">Visio</a></h4>
              <p class="description">Programmez vos rdv en ligne et intergaissez directement via webcam</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Featured Services Section -->


    

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Forum</h2>
          <h3>Dernières <span>discussions</span></h3>
          <p>
            Retrouvez ici toutes les discussions lancées par les membres de Pharma-emploi.
          </p>
        </div>

        <div class="row">
          Aucune discussion sur le forum...
          Soyez le premier à <a href="#">Créer une nouvelle discussion</a>
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
      
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Postes à pourvoir </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Officines recrutent</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p>Des RDV 7j/7 et 24h/24</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Techniciens pour vous accompagner  </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->







    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Nos <span>Services</span></h3>
          <p>Notre plateforme de recrutement en ligne facilite la navigation pour les candidats et les employeurs, en leur offrant un moyen rapide et efficace de se connecter.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-conversation"></i></div>
              <h4><a href="">Forum</a></h4>
              <p>Notre forum est un espace de discussion en ligne dédié aux professionnels de la pharmacie.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">CV Thèque</a></h4>
              <p>Notre CVthèque regroupe les profils les plus qualifiés en pharmacie, prêts à relever de nouveaux défis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message"></i></div>
              <h4><a href="">Messagerie</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-webcam"></i></div>
              <h4><a href="">Visio</a></h4>
              <p>Notre espace de visioconférence offre une solution pratique et efficace pour les entretiens d'embauche en ligne</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">Profil</a></h4>
              <p>Notre espace profil vous permet de présenter votre personnalité et vos compétences de manière dynamique et engageante</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-envelope"></i></div>
              <h4><a href="">Alertes</a></h4>
              <p>Les employeurs peuvent être informés en temps réel des nouveaux candidats correspondant à leurs exigences</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->





    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contactez-nous</span></h3>
          <p>Notre page de contact est là pour répondre à toutes vos questions et préoccupations.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Adresse </h3>
              <p>52 rue Marcadet, 75018, Paris</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>E-Mail</h3>
              <p>contact@pharma-emploi.fr</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.2969754407472!2d2.348136315447708!3d48.89067720638728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e66d9cb7295%3A0x4917b732c7ffa9d1!2s52%20Rue%20Marcadet%2C%2075018%20Paris!5e0!3m2!1sfr!2sfr!4v1675588016052!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form action="/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/templates/footer.php");
    ?>
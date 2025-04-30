<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Main Page</title>
  <link href="dash.css" rel="stylesheet"/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<!-- Header -->
<nav class="navbar d-flex justify-content-between align-items-center">
  <a class="navbar-brand d-flex align-items-center" href="dash.php">
    <img src="img/img.jpg" alt="Logo">
    <span class="ms-3 text-white fw-bold">A DTS</span>
  </a>
  <h4>Bienvenue <?php echo htmlspecialchars($_SESSION['user_nom']); ?>!</h4><!-- Display username -->
  <button class="logout-btn" onclick="location.href='logout.php'"><a href="logout.php">Logout</a></button>
</nav>
<!-- Main Content -->
<div class="container my-5">
  <div class="row g-4">
    <!-- Card 1 -->
     
    <div class="col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header-custom">
          Licences Professionnelles à l'EST Casablanca
        </div>
        <div class="card-body">
          <h5 class="card-title">Concours d'accès aux Licences Professionnelles EST Casablanca</h5>
          <p class="card-text">Ecole Supérieure de Technologie Casablanca: ( EST Casablanca), est un établissement public d'enseignement supérieur à finalité professionnalisant. La durée des études à l'EST est de deux années universitaires. - La première année s'étale sur 32 semaines suivies de quatre semaines de stage dans l'entreprise en Juillet ou Aout. - La deuxième année...</p>
        </div>
        <div class="card-footer-custom">
          <small>September 24, 2024</small>
          <a href="#" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header-custom">
          Licence Professionnelle EST Kénitra
        </div>
        <div class="card-body">
          <h5 class="card-title">Concours d’accès à la Licence Professionnelle « Génie Informatique et Gouvernance Digitale »</h5>
          <p class="card-text">La Licence « Génie Informatique et Gouvernance Digitale (GIGD) » a pour vocation de former des acteurs armés pour concevoir, développer, mais aussi exploiter des solutions innovantes et intelligentes dans le domaine de l’ingénierie logiciel et administration systèmes.
            L’objectif pédagogique de la Licence est de donner des connaissances fondamentales concernant...
          </p>
        </div>
        <div class="card-footer-custom">
          <small>September 20, 2024</small>
          <a href="#" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header-custom">
          Licences d'excellence à la FSJES Meknès
        </div>
        <div class="card-body">
          <h5 class="card-title">Concours d'accès des Licences d'excellence à la FSJES Meknès </h5>
          <p class="card-text">Faculté des Sciences Juridiques, Economiques et Sociales Meknès: ( FSJES Meknès), est un établissement d'enseignement supérieur dont le but est de développer des programmes d'enseignement et de recherche dans les domaines juridique, économique et social. A cette fin, elle remplit trois missions fondamentales : l'enseignement, la recherche, la culture et l'information .... </p>
        </div>
        <div class="card-footer-custom">
          <small>Septemper 17, 2024</small>
          <a href="#" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header-custom">
        la licence d'excellence Université Moulay Ismaïl 
        </div>
        <div class="card-body">
          <h5 class="card-title">Concours d'accès des Licences d'excellence à Université Moulay Ismaïl</h5>
          <p class="card-text">
            La filière IAG est axée sur l'acquisition de compétences dans le domaine de l'informatique de gestion.
            Elle vise à former les étudiants à utiliser les outils informatiques pour résoudre des problématiques de gestion au sein des entreprises.
            Cette formation combine des compétences en informatique avec une compréhension approfondie des concepts et des enjeux liés à la gestion d'entreprise.
         </p>
        </div>
        <div class="card-footer-custom">
          <small>September 15, 2024</small>
          <a href="#" class="read-more">Read more</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
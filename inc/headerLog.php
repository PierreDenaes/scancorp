<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>CorpScan</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navborder">
  <a class="navbar-brand" href="?call_lorem"><img src="images/corpscanLogo.png" width="50" alt="logo">    CorpScan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="?call_stat">Statistiques<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Questions</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?call_weeklyS">Suivi hebdomadaire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?call_mbi">Questionnaire MBI</a>
        </div>
      </li>
      <?php if($_SESSION['auth']->level == 4): ?>
      <li class="nav-item">
        <a class="nav-link" href="?call_addCsvComp">Entreprises</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?call_resetUserUse">Utilisateurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mentions légales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Droits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Thèmes</a>
      </li>
    <?php endif; ?>
    </ul>
    <a class="navbar-brand sortie" href="logout.php"><img class="logoSortie" src="images/output.png" alt="logo sortie"></a>
  </div>
  
</nav>
<p><?php echo $user; ?></p>
<div class="container-fluid" id="corps_html">
<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">

    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
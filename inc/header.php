<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CorpScan</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light navborder">
  <a class="navbar-brand" href="?call_lorem"><img src="images/corpscanLogo.png" width="50" alt="logo">    CorpScan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['auth'])): ?>
                <?php else: ?>  
                    <li class="nav-item"><a class="nav-link" href="register.php">S'inscrire</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
                <?php endif; ?>
    </ul>
  </div>
  
</nav>

<div class="container-fluid">
<div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div class="alertP alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>


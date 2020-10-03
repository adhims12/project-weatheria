<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
            integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">   
            <link rel="stylesheet" href="<?=BASEURL;?>/css/tema2.css" type="text/css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
  <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?=BASEURL;?>/img/logo1.png" alt="" id="logo1" style="height: 70px;"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h3 style="margin-left: -30px;" class="text-white">WEATHERIA PROJECTRUM</h3>
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="<?= BASEURL; ?>/cuaca">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-white" href="<?= BASEURL; ?>/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->  
<!-- home aka hero -->
<section id="hero">
    <div class="hero-container">
      <h1 class="w3-animate-zoom">Welcome to WEATHERIA PROJECTRUM</h1>
      <h2>Kita adalah website penampil cuaca kesayangan anda</h2>
      <a href="<?= BASEURL; ?>/about" class="btn-get-started">Get Started</a>
    </div>
  </section>
  <!-- #hero -->

 



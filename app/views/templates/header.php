<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
            integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="<?=BASEURL;?>/css/tema5.css" type="text/css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>

<body>     
      
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
            <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?=BASEURL;?>/img/logo1.png" alt="" id="logo1" style="height: 70px;"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h3 style="margin-left: -30px;">WEATHERIA PROJECTRUM</h3>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item-active">
                        <a class="nav-link text-white" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
          <a class="nav-link text-white" href="<?= BASEURL; ?>/about">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="<?= BASEURL; ?>/cuaca">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-white" href="<?= BASEURL; ?>/contact">Contact</a>
          </li>
                </ul>
            </div>
        </nav>  


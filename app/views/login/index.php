<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
            integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">   
            <link rel="stylesheet" href="<?=BASEURL;?>/css/tema6.css" type="text/css">
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
<body class="kosong">
    <div class="kosong">
    <div class="container">
<div class="row">
                <div class="col-md-6 ">
    <div id="admin">
    <h1 class="admin1"> Account Login</h1>
        <form>
  <div class="form-group">
        <label for="username">User Id</label>
        <input type="text" name="username"placeholder="USER NAME" class="form-control"  id="username">
      </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control"placeholder="PASSWORD" id="password">
  </div>
  <button type="submit" name="submit"class="login100-form-btn">
							Sign in
   </button>
  
</form>
    </div>
</div>
    <div class="col-md-6 ">
   <img src="<?=BASEURL;?>/img/background-01.png" alt="" id="background">
    </div>
</div>
    </div>
</body>
</html>


<footer id="footer">
      <div class="container-footer">
      <div class="copyright">
        &copy; Copyright <strong>Weatheria Projectrum</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://instagram.com/ahmad_adhim/">Ahmad Adhim Syihabuddin</a>
      </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="<?=BASEURL;?>/js/jquery.min.js"></script>
<script src="<?=BASEURL;?>/js/jquery.scrollex.min.js"></script>
<script src="<?=BASEURL;?>/js/main.js"></script>
<script src="<?=BASEURL;?>/js/skel.min.js"></script>
<script src="<?=BASEURL;?>/js/util.js"></script>
</body>




</html>
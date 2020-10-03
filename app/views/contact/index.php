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
            <link rel="stylesheet" href="<?=BASEURL;?>/css/tema4.css" type="text/css">
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Halaman <?= $data['judul']; ?></title>
</head>
</head>
<body class="kosong">
    <div class="kosong">
    <div class="container">
<div class="row">
                <div class="col-md-6 ">
    <div id="sejarah">
    <h1 class="kontak1"> Send Us Message</h1>
        <form>
  <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="" class="form-control" placeholder="MASUKAN NAMA LENGKAP ANDA" id="nama">
      </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Email</label>
    <input type="email" class="form-control"placeholder="MASUKAN EMAIL LENGKAP ANDA" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomor Telpon</label>
    <input type="text" class="form-control"placeholder="MASUKAN NOMOR TELPON LENGKAP ANDA" id="telpon">
  </div>
  <div class="form-group">
  <label>PESAN</label>
  <textarea class="form-control" rows="5"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="<?=BASEURL;?>/home" role="button">home</a>
  
</form>
    </div>
</div>
    <div class="col-md-6">
    <div class="embed-responsive embed-responsive-1by1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126660.7285995757!2d112.65406645820313!3d-7.223980799999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f8d6e0426af7%3A0xac0160eb606390f1!2sBMKG%20Stasiun%20Meteorologi%20Perak%20I%20Surabaya!5e0!3m2!1sid!2s!4v1600490103401!5m2!1sid!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    </div>
</div>
</div>
</div>
</body>
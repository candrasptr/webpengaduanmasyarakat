<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/resp.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- background -->
    <img src="assets/vector-bg.png" class="bg" width="50%">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/vector-logo.png" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active bg-active link-navbar tebel-sedang"href="#">Home &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="#">About &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="#">Service &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">SIGN UP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- content -->
    <div class="container">
      <br><br><br>
      <div class="row mt-5 mb-5">

        <div class="col-lg-12 gambar">
          <img src="assets/vector-content.png" width="100%">
        </div>      

        <div class="col-sm-12 position-relative p-4">
          <div class="position-absolute top-0 end-0">
            <img src="assets/vector-content.png" class="img">
          </div>

          <h1 class="display-1 text-truncate tebel-sedang">Learn</h1>
          <h1 class="display-1 text-truncate tebel-sedang">Everywhere</h1>

          <div class="desc mt-4">
            <p>Lorem ipsum dolor sit smaehi Lorem ipsum dolor sit smaehi Lorem ipsum dolor sit smaehi Lorem ipsum dolor sit smaehi Lorem ipsum dolor sit smaehi Lorem ipsum dolor sit smaehi</p>
          </div>

          <div class="mt-5">
            <a href="" class="button rounded-pill shadow tebel-sedang">Get started</a>
            &nbsp;
            <a href="" class="link">or contact</a>
          </div>

          <br>

        </div>

      </div>          
    </div>  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('landing/bs/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/body.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/resp.css') }}">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- background -->
    <img src="{{ asset('landing/assets/vector-bg.png') }}" class="bg" width="50%">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('landing/assets/vector-logo.png') }}" height="50px">
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
    @yield('content')
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('landing/bs/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('landing/js/onscroll.js') }}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
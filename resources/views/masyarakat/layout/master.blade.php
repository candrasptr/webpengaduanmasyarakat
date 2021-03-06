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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">

    <title>Pengaduan</title>
  </head>
  <body style="background-color: #fafafa;">
    
    <!-- background -->
    <img src="{{ asset('landing/assets/vector-bg.png') }}" class="bg" width="50%">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/img/logopengaduan.png') }}" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav nav-pills">
            @if (Auth::guard('masyarakat')->check())
            <li class="nav-item">
              <a class="nav-link active bg-active link-navbar tebel-sedang" href="/">Home &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar tebel-sedang" href="/history">History &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a href="/logoutmasyarakat" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">LOG OUT</a>
            </li>
            @else
            <li class="nav-item">
              <a href="/loginmasyarakat" class="nav-link bg-custom rounded tebel-sedang shadow" id="btn-sign">SIGN IN</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('landing/bs/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('landing/js/onscroll.js') }}"></script>
    <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
    @stack('page-scripts')

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
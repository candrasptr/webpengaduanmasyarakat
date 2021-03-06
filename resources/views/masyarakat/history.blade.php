<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>pengaduan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style2.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
  <link href="{{ asset('landing/bs/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/body.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/body.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/resp.css') }}">
</head>


<body>
    <div class="container-fluid">
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
    </div>
    <br><br><br><br><br><br>

    <!-- background -->
    <img src="{{ asset('landing/assets/vector-bg.png') }}" class="bg" width="50%">

    <div class="container-fluid">
      @if (session('message'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Ditunggu ya!</strong> {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="row">
        <div class="col-lg-12 gambar">
          <img src="{{ asset('landing/assets/vector-content.png') }}" width="100%">
        </div>  
      </div>
        
      <div class="row justify-content-center">
        
        @if ($data->count() == 1)
            
              @foreach ($data as $item) 
            @php
              $kode = 'PNGDN00'.$item->id_pengaduan
            @endphp 
            <div class="col-md-6">
            <h3 class="text-warning">History pengaduan</h3><hr width="100" class="text-right" style="height: 2px; color: blue;">
            <br><div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-warning">{{ $kode }} | {{ $item->status }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-4 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-8 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $num_char = 150;
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0, $num_char).'.....';
                        @endphp 
                        <p style="text-align: justify;">{{ $isi }}</p>
                      </div>
                  </div>
              </div>
              <div class="card-footer bg-transparent text-warning text-right">
                <a href="{{ route('tanggapans',$item->id_pengaduan) }}" class="text-warning">Lihat tanggapan</a>
              </div>
            </div>
          </div>
          @endforeach
            
        @elseif($data->count() == 2)
        <div class="col-md-12 mb-5">
          <h3 class="text-warning">History pengaduan</h3><hr width="100" class="text-right" style="height: 2px; color: blue;">
          <br>  <div class="card-group">
            @foreach ($data as $item) 
            @php
              $kode = 'PNGDN00'.$item->id_pengaduan
            @endphp 
            <div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-warning">{{ $kode }} | {{ $item->status }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-4 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-8 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $num_char = 150;
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0, $num_char).'.....';
                        @endphp 
                        <p style="text-align: justify;">{{ $isi }}</p>
                      </div>
                  </div>
              </div>
              <div class="card-footer bg-transparent text-warning text-right">
                <a href="{{ route('tanggapans',$item->id_pengaduan) }}" class="text-warning">Lihat tanggapan</a>
              </div>
            </div>
            @endforeach
          </div>            
        </div>
        @else
        <div class="col-md-12 mb-5 text-left">
          <h3 class="text-warning">History pengaduan</h3><hr width="100" class="text-left" style="height: 2px; color: blue;">
<br>
          <div class="card-group">
            @foreach ($data as $item) 
            @php
              $kode = 'PNGDN00'.$item->id_pengaduan
            @endphp 
            <div class="card mr-3" id="card-cart" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);" style="width: 25rem; height: 18rem;">
              <div class="card-body">
                  <h5 class="text-warning">{{ $kode }} | {{ $item->status }}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-md-6 col-12">
                      @if ($item->foto != '')
                          <img src="{{ asset('assets/img/produk/'.$item->foto) }}" width="150"></img>
                      @else
                          <img src="{{ asset('assets/img/nonimage.jpg') }}" width="150"></img>
                      @endif
                      </div>
                      <div class="col-md-6 col-12">
                        <b>Isi pengaduan</b><br>
                        @php
                            $num_char = 150;
                            $text = $item->isi_laporan;
                            $isi = Str::substr($text, 0, $num_char).'.....';
                        @endphp 
                        <p style="text-align: justify;">{{ $isi }}</p> 
                      </div>
                  </div>
              </div>
              <div class="card-footer bg-transparent text-right">
                <a href="{{ route('tanggapans',$item->id_pengaduan) }}" class="text-warning">Lihat tanggapan</a>
                
              </div>
            </div>
            @endforeach
          </div>            
        </div>            
        @endif   
      </div>  
    </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>

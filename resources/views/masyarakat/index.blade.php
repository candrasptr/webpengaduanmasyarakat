@extends('masyarakat/layout/master')

@section('content')
    <!-- content -->
    <div class="container">
        <br><br><br>
        <div class="row mt-5 mb-5">
  
          <div class="col-lg-12 gambar">
            <img src="{{ asset('landing/assets/vector-content.png') }}" width="100%">
          </div>      
  
          <div class="col-sm-12 position-relative p-4">
            <div class="position-absolute top-0 end-0">
              <img src="{{ asset('landing/assets/vector-content.png') }}" class="img">
            </div>
  
            <h1 class="display-1 text-truncate tebel-sedang">Pengaduan</h1>
            <h1 class="display-1 text-truncate tebel-sedang">Masyarakat</h1>
  
            <div class="desc mt-4">
              <p>Website pengaduan masyarakat ini digunakan untuk menyampaikan pengaduan yang ingin masyarakat sampaikan.</p>
            </div>
  
            <div class="mt-5">
              <a href="masyarakat_pengaduan" class="button rounded-pill shadow tebel-sedang">Isi pengaduan</a>
              &nbsp;
              <a href="history" class="link">history pengaduan</a>
            </div>
  
            <br>
  
          </div>
  
        </div>          
      </div>
@endsection
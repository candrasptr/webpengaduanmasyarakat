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
@endsection
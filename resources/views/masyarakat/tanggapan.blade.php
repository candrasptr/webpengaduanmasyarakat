@extends('masyarakat/layout/master')

@section('content')
    <!-- content -->
    <div class="container">
      <br>
        <div class="row mt-5 mb-5">
  
          <div class="col-lg-12 gambar">
            <img src="{{ asset('landing/assets/vector-content.png') }}" width="100%">
          </div>      
  
          <div class="col-sm-12 position-relative p-4">
            <div class="position-absolute top-0 end-0">
              <img src="{{ asset('landing/assets/vector-content.png') }}" class="img">
            </div>
  
            <div class="row">
              <div class="col-md-6">
                <h5 class="text-warning">Tanggapan dari pengaduan anda</h5><hr width="100" class="text-right" style="height: 2px; color: blue;">
                <br>
                <div class="card shadow" id="card-cart">
                  <div class="card-body">
                      @php
                          $text = $data->tanggapan;
                          $tanggapan = Str::substr($text, 0, 200).'...'
                      @endphp
                      <h5 class="text-warning">Tanggapan - {{ $data->tgl_tanggapan }}</h5>
                      <hr>
                    {{ $tanggapan }}
                    <hr>
                    <a href="#" id="swal" class="btn btn-warning px-5 text-light float-right" style="border-radius: 25px;">Detail</a>
                  </div>
                </div>
              </div>
            </div>

              
            
            
  
            
  
            <br>
  
          </div>
  
        </div>          
      </div>
      <script>
        $('#inputGambar_masakan').on('change',function(){
        //get the file name
          var fileName = $(this).val();
          var panjangnamafile = fileName.length;
          if (panjangnamafile > 22){
            hasilpotong = fileName.substring(0, 22);
            $(this).next('.custom-file-label').html(hasilpotong);
          }else{
            $(this).next('.custom-file-label').html(fileName);
          }
      })
      </script>
@endsection
@push('page-scripts')
<script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
<script type="text/javascript">

        $("#swal").click(function() {
	    swal('Detail Tanggapan', '{{ $data->tanggapan }}');
        });

</script>
@endpush
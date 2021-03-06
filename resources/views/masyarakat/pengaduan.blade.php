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
                <h5 class="text-warning">Ayo! isi pengaduan sesuai yang ingin kalian sampaikan</h5><hr width="100" class="text-right" style="height: 2px; color: blue;">
                <br>
                <div class="card shadow" id="card-cart">
                  <div class="card-body">
                    <form action="/prosespengaduan" class="row" method="POST" enctype="multipart/form-data">
                      @csrf
                      
                      <div class="col-md-12 mt-4 mb-2">
                        <img src="{{ asset('assets/img/nonimage.jpg') }}" width="200" class="img-thumbnail mr-3" align="left" id="preview">
                      </div>
                      <div class="col-md-12"></div>
        
                      <div class="col-md-12 mb-3">
                        <label>Pilih Gambar Masakan</label>
                          <div class="form-group">
                            <div class="custom-file">
                              <input name="gambar_masakan" type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" id="inputGambar_masakan" placeholder=" masukan file gambar buku" name="gambar">
                            </div>
                          </div>
                      </div>
        
                      <div class="col-md-12"></div>
        
                      <div class="col-md-12">
                        <label>Isi pengaduan</label>
                          <div class="form-group">
                            <div class="custom-file">
                              <textarea name="isi" rows="5" class="form-control"></textarea>
                            </div>
                          </div>
                      </div>
                    <div class="col-md-12 mt-5">
                      <button href="" class="btn btn-warning btn-block mb-3 shadow text-light">Isi pengaduan</button>
                    </div>
                  </form>
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

<script type="text/javascript">
	function filePreview(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview').attr('src',e.target.result)
		}
		reader.readAsDataURL(input.files[0]);
	}
}

$(function(){
	$("#inputGambar_masakan").change(function () {
		filePreview(this);
	});
});

</script>
@endpush
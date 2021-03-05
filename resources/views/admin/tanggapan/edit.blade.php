@extends('admin/layout.master')

@section('title','Petugas')
@section('title2','tambah')
@section('petugas','active')
@section('konten')

<div class="card">
  <div class="card-header">
    <h4>Edit petugas</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('tanggapan.update',$data->id_tanggapan) }}" method="POST">
        @method('PATCH')
    @csrf
    <div class="row">

        {{-- isi --}}
        <div class="col-md-12">
            <div class="form-group">
              <label @error('isi') class="text-danger" @enderror>
                isi
                @error('isi')
                  | {{ $message }}
                @enderror
              </label>
              <textarea name="isi" id="" cols="30" rows="10" class="form-control">
                @if (old('isi'))
                {{old('isi')}}
                @else {{ $data->tanggapan }}
                @endif
              </textarea> 
            </div>
          </div>

    </div>    
      <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a href="/petugas" class="btn btn-secondary" type="reset">Cancel</a>
      </div>
    </form>
  </div>
</div>

@endsection
@push('page-scripts')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $('#select2').select2();
</script>
@endpush

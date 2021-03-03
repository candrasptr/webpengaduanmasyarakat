@extends('admin/layout.master')

@section('title','masyarakat')
@section('title2','tambah')
@section('masyarakat','active')
@section('konten')

<div class="card">
  <div class="card-header">
    <h4>Edit masyarakat</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('masyarakat.update',$data->nik) }}" method="POST">
        @method('PATCH')
    @csrf
    <div class="row">

        {{-- nik --}}
        <div class="col-md-6">
            <div class="form-group">
              <label @error('nik') class="text-danger" @enderror>
                nik
                @error('nik')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="nik"  
              @if (old('nik'))
                  value="{{old('nik')}}"
              @else
                  value="{{ $data->nik }}"
              @endif
              class="form-control" autocomplete="off"> 
            </div>
          </div>

        {{-- nama --}}
        <div class="col-md-6">
            <div class="form-group">
              <label @error('nama') class="text-danger" @enderror>
                nama masyarakat
                @error('nama')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="nama"  
              @if (old('nama'))
                  value="{{old('nama')}}"
              @else
                  value="{{ $data->nama }}"
              @endif
              class="form-control" autocomplete="off">  
            </div>
          </div>

          {{-- username --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('username') class="text-danger" @enderror>
                Username
                @error('username')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="username"  
              @if (old('username'))
                  value="{{old('username')}}"
              @else
                  value="{{ $data->username }}"
              @endif
              class="form-control" autocomplete="off">  
            </div>
          </div>
          
          {{-- password --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('password') class="text-danger" @enderror>
                password
                @error('password')
                  | {{ $message }}
                @enderror
              </label>
              <input type="password" name="password"  
              @if (old('password'))
                  value="{{old('password')}}"
              @else
                  
              @endif
              class="form-control" autocomplete="off">  
            </div>
          </div>

          {{-- telp --}}
          <div class="col-md-6">
            <div class="form-group">
              <label @error('telp') class="text-danger" @enderror>
                telp
                @error('telp')
                  | {{ $message }}
                @enderror
              </label>
              <input type="text" name="telp"  
              @if (old('telp'))
                  value="{{old('telp')}}"
              @else
                  value="{{ $data->telp }}"
              @endif
              class="form-control" autocomplete="off">  
            </div>
          </div>

          

    </div>    
      <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a href="/masyarakat" class="btn btn-secondary" type="reset">Cancel</a>
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

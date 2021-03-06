@extends('admin/layout.master')

@section('title','Masyarakat')
@section('title2','index')
@section('masyarakat','active')

@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    {{-- Button tambah --}}
                    <a href="{{ route('masyarakat.create') }}" class="btn btn-warning mb-4"><i class="fas fa-plus text-light"></i></a>
                    
                    {{-- Form search --}}
                    <div class="float-right">
                        <form action="?" method="GET">
                          <div class="input-group mb-3">
                            <input name="keyword" id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="{{ Request()->keyword }}" autocomplete="off">
                            <div class="input-group-append">
                              <button id="btncaribuku" class="btn btn-outline-warning bg-warning" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                            </div>
                          </div>
                        </form>
                    </div>

                    {{-- Alert --}}
                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('message') }}
                        </div>
                    </div>
                    @endif

                    {{-- tabel --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>nama</th>
                                <th>Telp</th>
                                <th>username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        <a href="{{ route('masyarakat.edit',$item->nik) }}" class="btn btn-warning"><i class="fas fa-edit mb-2"></i></a>
                                        <a href="#" data-id="" class="btn btn-danger confirm_script-{{$item->nik}} mr-3">
                                            <form action="{{ route('masyarakat.destroy',$item->nik)}}" class="delete_form-{{$item->nik}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            </form>
                                            <i class="fas fa-trash"></i>
                                          </a>
                                    </td>
                                </tr>
                                @push('page-scripts')
                                <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>

                                @endpush

                                @push('after-scripts')

                                <script>
                                $(".confirm_script-{{$item->nik}}").click(function(e) {
                                // id = e.target.dataset.id;
                                swal({
                                    title: 'Yakin hapus data?',
                                    text: 'Data yang dihapus tidak bisa di kembalikan',
                                    icon: 'warning',
                                    buttons: true,
                                    dangerMode: true,
                                    })
                                    .then((willDelete) => {
                                    if (willDelete) {
                                        $('.delete_form-{{$item->nik}}').submit();
                                    } else {
                                    swal('Hapus data telah di batalkan');
                                    }
                                    });
                                });
                                </script>
                                @endpush
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin/layout.master')

@section('title','tanggapan')
@section('title2','index')
@section('tanggapan','active')

@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

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
                    {{-- Button tambah --}}
                    {{-- <a href="{{ route('tanggapan.create') }}" class="btn btn-violet mb-4"><i class="fas fa-plus text-light"></i></a> --}}
                    
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

                    

                    {{-- tabel --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id pengaduan</th>
                                <th>isi tanggapan</th>
                                <th>Tanggal tanggapan</th>
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
                                    <td>{{ $item->pengaduan_id }}</td>
                                    <td>{{ $item->tanggapan }}</td>
                                    <td>{{ $item->tgl_tanggapan }}</td>
                                    <td>
                                        <a href="{{ route('tanggapan.edit',$item->id_tanggapan) }}" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-id="" class="btn btn-danger confirm_script-{{$item->id_tanggapan}} mr-3 mb-1">
                                            <form action="{{ route('tanggapan.destroy',$item->id_tanggapan)}}" class="delete_form-{{$item->id_tanggapan}}" method="POST">
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
                                $(".confirm_script-{{$item->id_tanggapan}}").click(function(e) {
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
                                        $('.delete_form-{{$item->id_tanggapan}}').submit();
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

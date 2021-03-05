@extends('admin/layout.master')

@section('title','pengaduan')
@section('title2','index')
@section('pengaduan','active')

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
                    {{-- <a href="{{ route('pengaduan.create') }}" class="btn btn-violet mb-4"><i class="fas fa-plus text-light"></i></a> --}}
                    
                    {{-- Form search --}}
                    <div class="float-right">
                        <form action="?" method="GET">
                          <div class="input-group mb-3">
                            <input name="keyword" id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="{{ Request()->keyword }}" autocomplete="off">
                            <div class="input-group-append">
                              <button id="btncaribuku" class="btn btn-outline-violet bg-violet" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                            </div>
                          </div>
                        </form>
                    </div>

                    

                    {{-- tabel --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Nama_pengaduan</th>
                                <th>Tanggal pengaduan</th>
                                <th>status</th>
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
                                    <td>{{ $item->tanggal_pengaduan }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        @if ($item->status == 'terkirim')
                                            <a href="{{ route('pengaduan.proses',$item->id_pengaduan )}}" class="btn btn-primary"><i class="fas fa-keyboard"></i> Diproses</a>
                                        @elseif($item->status == 'proses')
                                            <a href="{{ route('pengaduan.selesai',$item->id_pengaduan )}}" class="btn btn-success"><i class="fas fa-check"></i> Selesaikan</a>
                                        @else
                                            
                                        @endif
                                        <a href="{{ route('pengaduan.tanggapan',$item->id_pengaduan) }}" class="btn btn-warning"><i class="far fa-comment-dots"></i> Tanggapi</a>
                                    </td>
                                </tr>
                                @push('page-scripts')
                                <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>

                                @endpush

                                @push('after-scripts')

                                <script>
                                $(".confirm_script-{{$item->id_pengaduan}}").click(function(e) {
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
                                        $('.delete_form-{{$item->id_pengaduan}}').submit();
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

@extends('admin/layout.master')

@section('title','Dashboard')
@section('title2','index')
@section('dashboard','active')

@section('konten')
@if ($pengaduan != '' | $terkirim != '' | $proses != '' | $selesai != '')
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-box"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pengaduan </h4>
        </div>
        <div class="card-body">
          {{ $pengaduan }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-envelope"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Belum diproses</h4>
        </div>
        <div class="card-body">
          {{  $terkirim }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="fas fa-box-open"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Diproses</h4>
        </div>
        <div class="card-body">
          {{ $proses }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-users"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Selesai</h4>
        </div>
        <div class="card-body">
          {{ $selesai }}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-8 col-lg-8">
      <div class="card">
        <div class="card-header">
          <h4 class="text-warning">Pie Chart</h4>
        </div>
        <div class="card-body">
          <canvas id="myChart4"></canvas>
        </div>
      </div>
  </div>
  <div class="col-lg-4 col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-warning">Recent Activities</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled list-unstyled-border">
              @foreach ($data as $item)
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                <div class="media-body">
                  <div class="float-right @if($item->status == 'selesai') text-success @else text-warning @endif">{{ $item->status }}</div>
                  <div class="media-title">{{ $item->nama }}</div>
                  @php
                      $string = $item->isi_laporan;
                      $length = 90;
                      $isi = Str::substr($string, 0, $length).'.....'
                  @endphp
                  <span class="text-small text-muted">{{ $isi }}</span>
                </div>
              </li>
                  
              @endforeach
          </ul>
          <div class="text-center pt-1 pb-1">
            @if (Auth::guard('admin')->user()->status == 'admin')
            <a href="pengaduan" class="btn btn-warning btn-lg btn-round">
              View All
            </a>
            @endif
          </div>
        </div>
      </div>
  </div>
</div>
@php
    $persen = 100;
    $persenbelum = $terkirim / $pengaduan * $persen;
    $persenproses = $proses / $pengaduan * $persen;
    $persenselesai = $selesai / $pengaduan * $persen;
@endphp
@endif


@endsection
@if ($pengaduan != '' | $terkirim != '' | $proses != '' | $selesai != '')
@push('before-scripts')
<script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
@endpush
@push('page-scripts')
<script type="text/javascript">
var ctx = document.getElementById("myChart4").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        {{ $persenbelum }},
        {{ $persenproses }},
        {{ $persenselesai }},
      ],
      backgroundColor: [
        '#fc544b',
        '#ffa426',
        '#63ed7a',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'belum diproses',
      'diproses',
      'selesai',
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});
</script>
@endpush
@endif


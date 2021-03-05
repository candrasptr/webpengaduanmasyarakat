<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pengaduan = DB::table('tbl_pengaduan')->count();
        $terkirim = DB::table('tbl_pengaduan')->where('status','terkirim')->count();
        $proses = DB::table('tbl_pengaduan')->where('status','proses')->count();
        $selesai = DB::table('tbl_pengaduan')->where('status','selesai')->count();
        $data = DB::table('tbl_pengaduan')
        ->join('tbl_masyarakat', function($join){
            $join->on('tbl_pengaduan.nik_id','=','tbl_masyarakat.nik');
        })->orderBy('id_pengaduan','DESC')->paginate(3);
        return view('admin/dashboard.index',[
            'data'=>$data,
            'pengaduan'=>$pengaduan,
            'terkirim'=>$terkirim,
            'proses'=>$proses,
            'selesai'=>$selesai
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TanggapanController extends Controller
{

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'isi'=>'required'
        ],
        [
            'isi.required'=>'Harus diisi'
        ]);
    }

    public function index(Request $request)
    {
        $data = DB::table('tbl_tanggapan')->where('tanggapan','like',"%{$request->keyword}%")
        ->orWhere('pengaduan_id','like',"%{$request->keyword}%")->paginate(5);
        return view('admin/tanggapan.index',['data'=>$data]);
    }

    public function tambah(Request $request)
    {
        $tanggal = date('Y-m-d');
        DB::table('tbl_tanggapan')->insert([
            'pengaduan_id'=>$request->id,
            'tgl_tanggapan'=>$tanggal,
            'tanggapan'=>$request->isi,
            'petugas_id'=>Auth::guard('admin')->user()->id_petugas
        ]);
        return redirect('tanggapan')->with('message','Tanggapan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DB::table('tbl_tanggapan')->where('id_tanggapan',$id)->first();
        return view('admin/tanggapan.edit',['data'=>$data]);
    }

    public function update(Request $request,$id)
    {
        DB::table('tbl_tanggapan')->where('id_tanggapan',$id)->update([
            'tanggapan'=>$request->isi
        ]);
        return redirect('tanggapan')->with('message','Data berhasil diubah');
    }

    public function destroy($id)
    {
        DB::table('tbl_tanggapan')->where('id_tanggapan',$id)->delete();
        return redirect()->back()->with('message','data berhasil dihapus');
    }
}

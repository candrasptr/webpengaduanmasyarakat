<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required|max:35',
            'username' => 'required|max:35',
            'password' => 'required',
            'level' => 'required',
        ],
        [
            'nama.required' => 'Harus diisi',
            'nama.max' => 'Jangan melebihi 35 huruf',
            'username.required' => 'Harus diisi',
            'username.max' => 'Jangan melebihi 25 huruf',
            'password.required' => 'Harus diisi',
            'level.required' => 'Harus diisi',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_petugas')
        ->where('nama_petugas','like',"%{$request->keyword}%")
        ->orWhere('username','like',"%{$request->keyword}%")
        ->orWhere('status','like',"%{$request->keyword}%")
        ->paginate(5);
        return view('admin/petugas.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_petugas')->insert([
            'nama_petugas'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($password),
            'telp'=>$request->telp,
            'status'=>$request->level
        ]);
        return redirect('petugas')->with('message','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('tbl_petugas')->where('id_petugas',$id)->first();
        return view('admin/petugas.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_petugas')->where('id_petugas',$id)->update([
            'nama_Petugas'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($password),
            'telp'=>$request->telp,
            'status'=>$request->level
        ]);
        return redirect('petugas')->with('message','Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_petugas')->where('id_petugas',$id)->delete();
        return redirect()->back()->with('message','Berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers\Santri;

use Alert;
use App\Models\User;
use App\Models\Alamat;
use App\Models\Dokumen;
use App\Models\OrangTua;
use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Models\InformasiTambahan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Santri\BiodataRequest;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'     =>      'Lengkapi Biodata',
            'ortu'      =>      OrangTua::where('id_user', Auth::user()->id)->first(),
            'asal'      =>      AsalSekolah::where('id_user', Auth::user()->id)->first(),
            'info'      =>      InformasiTambahan::where('id_user', Auth::user()->id)->first(),
            'dokumen'   =>      Dokumen::where('id_user', Auth::user()->id)->first(),
            'alamat'    =>      Alamat::where('id_user', Auth::user()->id)->first(),
        );

        return view('pages.santri.biodata.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(403);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiodataRequest $request, $id)
    {
        $nama       =   $request->nama_lengkap;
        $nisn       =   $request->nisn;
        $nik        =   $request->nik;
        $jekel      =   $request->jenis_kelamin;
        $tmp_lahir  =   $request->tmp_lahir;
        $tgl_lahir  =   $request->tgl_lahir;


        $data = array(
            'nama_lengkap'      =>  $nama,
            'nisn'              =>  $nisn,
            'nik'               =>  $nik,
            'jenis_kelamin'     =>  $jekel,
            'tmp_lahir'         =>  $tmp_lahir,
            'tgl_lahir'         =>  $tgl_lahir
        );

        $result = User::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Success', 'Indentitas berhasil di update !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Indentitas gagal di update !');
            return redirect()->route('santri.biodata.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(403);
    }

    public function biodata_santri()
    {
        $data = array(
            'title' =>  'Biodata Santri | ' . Auth::user()->nama_lengkap,
            'santri'    =>      User::where('id', Auth::user()->id)->first(),
            'ortu'      =>      OrangTua::where('id_user', Auth::user()->id)->first(),
            'asal'      =>      AsalSekolah::where('id_user', Auth::user()->id)->first(),
            'info'      =>      InformasiTambahan::where('id_user', Auth::user()->id)->first(),
            'dokumen'   =>      Dokumen::where('id_user', Auth::user()->id)->first(),
            'alamat'    =>      Alamat::where('id_user', Auth::user()->id)->first(),
        );

        return view('pages.santri.biodata.show', $data);
    }
}

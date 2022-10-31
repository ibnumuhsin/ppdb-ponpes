<?php

namespace App\Http\Controllers\Santri;

use App\Models\OrangTua;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Santri\OrangTuaRequest;
use Alert;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(403);
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
    public function store(OrangTuaRequest $request)
    {
        $nama_ayah              =   $request->nama_ayah;
        $pendidikan_ayah        =   $request->pendidikan_ayah;
        $pekerjaan_ayah         =   $request->pekerjaan_ayah;
        $nama_ibu               =   $request->nama_ibu;
        $pendidikan_ibu         =   $request->pendidikan_ibu;
        $pekerjaan_ibu          =   $request->pekerjaan_ibu;
        $no_ortu                =   $request->no_telp_ortu;
        $penghasilan_ortu       =   $request->penghasilan_ortu;
        $nama_wali              =   $request->nama_wali;
        $pendidikan_wali        =   $request->pendidikan_wali;
        $pekerjaan_wali         =   $request->pekerjaan_wali;
        $no_wali                =   $request->no_telp_wali;
        $penghasilan_wali       =   $request->penghasilan_wali;

        $data = array(
            'id_user'           =>  Auth::user()->id,
            'nama_ayah'         =>  $nama_ayah,
            'pendidikan_ayah'   =>  $pendidikan_ayah,
            'pekerjaan_ayah'    =>  $pekerjaan_ayah,
            'nama_ibu'          =>  $nama_ibu,
            'pendidikan_ibu'    =>  $pendidikan_ibu,
            'pekerjaan_ibu'     =>  $pekerjaan_ibu,
            'no_telp_ortu'      =>  $no_ortu,
            'penghasilan_ortu'  =>  $penghasilan_ortu,
            'nama_wali'         =>  $nama_wali,
            'pendidikan_wali'   =>  $pendidikan_wali,
            'pekerjaan_wali'    =>  $pekerjaan_wali,
            'no_telp_wali'      =>  $no_wali,
            'penghasilan_wali'  =>  $penghasilan_wali,
        );

        $result = OrangTua::create($data);

        if ($result) {
            Alert::success('Success', 'Data Orang Tua berhasil di simpan !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data Orang Tua gagal di simpan !');
            return redirect()->route('santri.biodata.index');
        }
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
    public function update(OrangTuaRequest $request, $id)
    {
        $nama_ayah              =   $request->nama_ayah;
        $pendidikan_ayah        =   $request->pendidikan_ayah;
        $pekerjaan_ayah         =   $request->pekerjaan_ayah;
        $nama_ibu               =   $request->nama_ibu;
        $pendidikan_ibu         =   $request->pendidikan_ibu;
        $pekerjaan_ibu          =   $request->pekerjaan_ibu;
        $no_ortu                =   $request->no_telp_ortu;
        $penghasilan_ortu       =   $request->penghasilan_ortu;
        $nama_wali              =   $request->nama_wali;
        $pendidikan_wali        =   $request->pendidikan_wali;
        $pekerjaan_wali         =   $request->pekerjaan_wali;
        $no_wali                =   $request->no_telp_wali;
        $penghasilan_wali       =   $request->penghasilan_wali;

        $data = array(
            'nama_ayah'         =>  $nama_ayah,
            'pendidikan_ayah'   =>  $pendidikan_ayah,
            'pekerjaan_ayah'    =>  $pekerjaan_ayah,
            'nama_ibu'          =>  $nama_ibu,
            'pendidikan_ibu'    =>  $pendidikan_ibu,
            'pekerjaan_ibu'     =>  $pekerjaan_ibu,
            'no_telp_ortu'      =>  $no_ortu,
            'penghasilan_ortu'  =>  $penghasilan_ortu,
            'nama_wali'         =>  $nama_wali,
            'pendidikan_wali'   =>  $pendidikan_wali,
            'pekerjaan_wali'    =>  $pekerjaan_wali,
            'no_telp_wali'      =>  $no_wali,
            'penghasilan_wali'  =>  $penghasilan_wali,
        );

        $result = OrangTua::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data Orang Tua berhasil di update !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data Orang Tua gagal di update !');
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
}

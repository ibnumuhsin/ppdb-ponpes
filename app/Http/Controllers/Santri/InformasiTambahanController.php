<?php

namespace App\Http\Controllers\Santri;

use Alert;
use Illuminate\Http\Request;
use App\Models\InformasiTambahan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Santri\InformasiRequest;

class InformasiTambahanController extends Controller
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
    public function store(InformasiRequest $request)
    {
        $minat_bakat        =   $request->minat_bakat;
        $riwayat_penyakit   =   $request->riwayat_penyakit;

        $data = array(
            'id_user'           =>  Auth::user()->id,
            'minat_bakat'       => $minat_bakat,
            'riwayat_penyakit'  => $riwayat_penyakit,
        );

        $result = InformasiTambahan::create($data);

        if ($result) {
            Alert::success('Success', 'Data informasi tambahan berhasil di simpan !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data informasi tambahan gagal di simpan !');
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
    public function update(InformasiRequest $request, $id)
    {
        $minat_bakat        =   $request->minat_bakat;
        $riwayat_penyakit   =   $request->riwayat_penyakit;

        $data = array(
            'minat_bakat'       => $minat_bakat,
            'riwayat_penyakit'  => $riwayat_penyakit,
        );

        $result = InformasiTambahan::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data informasi tambahan berhasil di update !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data informasi tambahan gagal di update !');
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

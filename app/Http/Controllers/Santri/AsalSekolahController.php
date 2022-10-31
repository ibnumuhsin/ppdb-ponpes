<?php

namespace App\Http\Controllers\Santri;

use Alert;
use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Santri\AsalSekolahRequest;

class AsalSekolahController extends Controller
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
    public function store(AsalSekolahRequest $request)
    {
        $asal   =   $request->nama_sekolah;
        $lulus  =   $request->thn_lulus;

        $data = array(
            'id_user'           =>  Auth::user()->id,
            'nama_sekolah'      => $asal,
            'thn_lulus'         => $lulus,
        );

        $result = AsalSekolah::create($data);

        if ($result) {
            Alert::success('Success', 'Data asal sekolah berhasil di simpan !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data asal sekolah gagal di simpan !');
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
    public function update(AsalSekolahRequest $request, $id)
    {
        $asal   =   $request->nama_sekolah;
        $lulus  =   $request->thn_lulus;

        $data = array(
            'nama_sekolah'      => $asal,
            'thn_lulus'         => $lulus,
        );

        $result = AsalSekolah::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data asal sekolah berhasil di update !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data asal sekolah gagal di update !');
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

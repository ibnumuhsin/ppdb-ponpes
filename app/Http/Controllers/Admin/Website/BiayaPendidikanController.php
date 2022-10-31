<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\BiayaPendidikan;

class BiayaPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array(
            'title'        =>  'Biaya Pendidikan Santri',
            'biaya'        =>   BiayaPendidikan::orderBy('id', 'DESC')->get()
        );

        return view('pages.admin.website.biaya.index', $data);
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
        $rincian    = $request->rincian;
        $biaya      = $request->biaya;

        $data = array(
            'rincian'   =>  $rincian,
            'biaya'     =>  $biaya,
        );

        $result = BiayaPendidikan::create($data);

        if ($result) {
            Alert::success('Berhasil', 'Data berhasil di tambahkan !');
            return redirect()->route('admin.biaya_pendidikan.index');
        } else {
            Alert::error('Gagal', 'Data gagal di tambahkan !');
            return redirect()->route('admin.biaya_pendidikan.index');
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
    public function update(Request $request, $id)
    {

        $rincian    = $request->rincian;
        $biaya      = $request->biaya;

        $data = array(
            'rincian'   =>  $rincian,
            'biaya'     =>  $biaya,
        );

        $result = BiayaPendidikan::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Berhasil', 'Data berhasil di update !');
            return redirect()->route('admin.biaya_pendidikan.index');
        } else {
            Alert::error('Gagal', 'Data gagal di update !');
            return redirect()->route('admin.biaya_pendidikan.index');
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

        $result = BiayaPendidikan::destroy($id);

        if ($result) {
            Alert::success('Berhasil', 'Data berhasil di hapus !');
            return redirect()->route('admin.biaya_pendidikan.index');
        } else {
            Alert::error('Gagal', 'Data gagal di hapus !');
            return redirect()->route('admin.biaya_pendidikan.index');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin\Website;

use App\Models\SyaratDaftar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class SyaratDaftarController extends Controller
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
            'title'     =>      'Syarat Pendaftaran',
            'syarat'    =>      SyaratDaftar::orderBy('id', 'DESC')->get()
        );

        return view('pages.admin.website.syarat.index', $data);
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
        $syarat =   $request->persyaratan;

        $data = array(
            'persyaratan'   =>  $syarat,
        );

        $add = SyaratDaftar::create($data);

        if ($add) {
            Alert::success('Berhasil', 'Data berhasil di tambahkan !');
            return redirect()->route('admin.syarat_daftar.index');
        } else {
            Alert::error('Gagal', 'Data gagal di tambahkan !');
            return redirect()->route('admin.syarat_daftar.index');
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

        $syarat =   $request->persyaratan;

        $data = array(
            'persyaratan'   =>  $syarat,
        );

        $update = SyaratDaftar::where('id', $id)->update($data);

        if ($update) {
            Alert::success('Berhasil', 'Data berhasil di update !');
            return redirect()->route('admin.syarat_daftar.index');
        } else {
            Alert::error('Gagal', 'Data gagal di update !');
            return redirect()->route('admin.syarat_daftar.index');
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
        $del = SyaratDaftar::destroy($id);

        if ($del) {
            Alert::success('Berhasil', 'Data berhasil di hapus !');
            return redirect()->route('admin.syarat_daftar.index');
        } else {
            Alert::error('Gagal', 'Data gagal di hapus !');
            return redirect()->route('admin.syarat_daftar.index');
        }
    }
}

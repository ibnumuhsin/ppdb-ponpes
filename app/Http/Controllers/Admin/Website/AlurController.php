<?php

namespace App\Http\Controllers\Admin\Website;

use Alert;
use App\Models\Alur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AlurController extends Controller
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
            'title' => 'Alur Pendaftaran',
            'alur'  =>  Alur::orderBy('id', 'DESC')->get()
        );

        return view('pages.admin.website.alur.index', $data);
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
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
        );

        $add = Alur::create($data);

        if ($add) {
            Alert::success('Berhasil', 'Data berhasil di tambahkan !');
            return redirect()->route('admin.alur.index');
        } else {
            Alert::error('Gagal', 'Data gagal di tambahkan !');
            return redirect()->route('admin.alur.index');
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
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
        );

        $edit = Alur::where('id', $id)->update($data);

        if ($edit) {
            Alert::success('Berhasil', 'Data berhasil di edit !');
            return redirect()->route('admin.alur.index');
        } else {
            Alert::error('Gagal', 'Data gagal di edit !');
            return redirect()->route('admin.alur.index');
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
        $del = Alur::destroy($id);

        if ($del) {
            Alert::success('Berhasil', 'Data berhasil di hapus !');
            return redirect()->route('admin.alur.index');
        } else {
            Alert::error('Gagal', 'Data gagal di hapus !');
            return redirect()->route('admin.alur.index');
        }
    }
}

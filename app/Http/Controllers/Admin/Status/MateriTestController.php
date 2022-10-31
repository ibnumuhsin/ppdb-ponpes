<?php

namespace App\Http\Controllers\Admin\Status;

use App\Http\Controllers\Controller;
use App\Models\MateriTes;
use Illuminate\Http\Request;
use Alert;

class MateriTestController extends Controller
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
    public function store(Request $request)
    {
        $result =   MateriTes::create([
            'materi_test'   =>  $request->materi_test
        ]);

        if($result){
            Alert::success('Success', 'Data berhasil di simpan !');
            return redirect()->route('admin.verifikasi.index');
        } else {
            Alert::error('Error', 'Data gagal di simpan !');
            return redirect()->route('admin.verifikasi.index');
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
        $result =   MateriTes::where('id', $id)->update([
            'materi_test'   =>  $request->materi_test
        ]);

        if($result){
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.verifikasi.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.verifikasi.index');
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
        $result =   MateriTes::destroy($id);

        if($result){
            Alert::success('Success', 'Data berhasil di reset !');
            return redirect()->route('admin.verifikasi.index');
        } else {
            Alert::error('Error', 'Data gagal di reset !');
            return redirect()->route('admin.verifikasi.index');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin\Website;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class VisiMisiController extends Controller
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
            'title' => 'Visi & Misi',
            'vm'  =>  VisiMisi::first()
        );

        return view('pages.admin.website.visimisi.index', $data);
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
        $visi = $request->visi;
        $misi = $request->misi;

        $data = array(
            'visi' => $visi,
            'misi' => $misi
        );

        $result = VisiMisi::create($data);

        if($result){
            Alert::success('Success', 'Data berhasil di simpan !');
            return redirect()->route('admin.visi_misi.index');
        } else {
            Alert::error('Error', 'Data gagal di simpan !');
            return redirect()->route('admin.visi_misi.index');
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
        $visi = $request->visi;
        $misi = $request->misi;

        $data = array(
            'visi' => $visi,
            'misi' => $misi
        );

        $result = VisiMisi::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil di edit !');
            return redirect()->route('admin.visi_misi.index');
        } else {
            Alert::error('Error', 'Data gagal di edit !');
            return redirect()->route('admin.visi_misi.index');
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

        $result = VisiMisi::destroy($id);

        if ($result) {
            Alert::success('Success', 'Data berhasil di reset !');
            return redirect()->route('admin.visi_misi.index');
        } else {
            Alert::error('Error', 'Data gagal di reset !');
            return redirect()->route('admin.visi_misi.index');
        }
    }
}

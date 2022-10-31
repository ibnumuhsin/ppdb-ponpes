<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Alert;

class FasilitasController extends Controller
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
            'title'     =>  'Fasilitas Pesantren',
            'fasilitas' =>  Fasilitas::orderBy('id', 'DESC')->get(),
        );
        return view('pages.admin.website.fasilitas.index', $data);
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
        $fasilitas =  $request->fasilitas;

        $data = array(
            'fasilitas' =>  $fasilitas,
        );

        $result = Fasilitas::create($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil di simpan !');
            return redirect()->route('admin.fasilitas.index');
        } else {
            Alert::error('Error', 'Data gagal di simpan !');
            return redirect()->route('admin.fasilitas.index');
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
        $fasilitas =  $request->fasilitas;

        $data = array(
            'fasilitas' =>  $fasilitas,
        );

        $result = Fasilitas::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil di edit !');
            return redirect()->route('admin.fasilitas.index');
        } else {
            Alert::error('Error', 'Data gagal di edit !');
            return redirect()->route('admin.fasilitas.index');
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

        $result = Fasilitas::destroy($id);

        if ($result) {
            Alert::success('Success', 'Data berhasil di hapus !');
            return redirect()->route('admin.fasilitas.index');
        } else {
            Alert::error('Error', 'Data gagal di hapus !');
            return redirect()->route('admin.fasilitas.index');
        }
    }
}

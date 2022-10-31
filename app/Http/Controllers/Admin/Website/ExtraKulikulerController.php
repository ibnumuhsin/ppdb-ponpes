<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\ExtraKulikuler;

class ExtraKulikulerController extends Controller
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
            'title'     =>  'Data Extra Kulikuler',
            'ek'        =>  ExtraKulikuler::orderBy('id', 'DESC')->get()
        );

        return view('pages.admin.website.extrakulikuler.index', $data);
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
        $data = array(
            'extra_kulikuler'       =>  $request->extra_kulikuler,
        );

        $result = ExtraKulikuler::create($data);

        if ($result) {
            Alert::success('Success', 'Data Berhasil di Simpan !');
            return redirect()->route('admin.extra_kulikuler.index');
        } else {
            Alert::error('Error', 'Data Gagal di Simpan !');
            return redirect()->route('admin.extra_kulikuler.index');
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

        $data = array(
            'extra_kulikuler'       =>  $request->extra_kulikuler,
        );

        $result = ExtraKulikuler::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data Berhasil di Edit !');
            return redirect()->route('admin.extra_kulikuler.index');
        } else {
            Alert::error('Error', 'Data Gagal di Edit !');
            return redirect()->route('admin.extra_kulikuler.index');
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
        $result = ExtraKulikuler::destroy($id);

        if ($result) {
            Alert::success('Success', 'Data Berhasil di Hapus !');
            return redirect()->route('admin.extra_kulikuler.index');
        } else {
            Alert::error('Error', 'Data Gagal di Hapus !');
            return redirect()->route('admin.extra_kulikuler.index');
        }
    }
}

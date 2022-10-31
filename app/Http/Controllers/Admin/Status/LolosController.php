<?php

namespace App\Http\Controllers\Admin\Status;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use App\Models\Kelulusan;

class LolosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = array(
            'title'         => 'Kelulusan',
            'kelulusan'     =>  User::orderBy('id', 'DESC')->where('roles', 2)->where('thn_daftar', date('Y'))->get(),
            'ket'           =>  Kelulusan::first()
        );

        return view('pages.admin.kelulusan.index', $data);
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
        return abort(403);
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
        $result = User::where('id', $id)->update([
            'status_kelulusan' => $request->status_kelulusan,
        ]);

        if ($result) {
            Alert::success('Success', 'Status kelulusan berhasil di update !');
            return redirect()->route('admin.kelulusan.index');
        } else {
            Alert::error('Error', 'Status gagal berhasil di update!');
            return redirect()->route('admin.kelulusan.index');
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

    public function lulus()
    {
        $data = array(
            'title'        => 'Status Lulus',
            'kelulusan'     =>  User::orderBy('id', 'DESC')->where('roles', 2)->where('thn_daftar', date('Y'))->where('status_kelulusan', 1)->get(),
        );

        return view('pages.admin.kelulusan.lulus', $data);
    }
    public function tdk_lulus()
    {
        $data = array(
            'title'        => 'Status Tidak Lulus',
            'kelulusan'     =>  User::orderBy('id', 'DESC')->where('roles', 2)->where('thn_daftar', date('Y'))->where('status_kelulusan', 2)->get(),
        );

        return view('pages.admin.kelulusan.tidak_lulus', $data);
    }
}

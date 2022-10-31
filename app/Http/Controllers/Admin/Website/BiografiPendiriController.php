<?php

namespace App\Http\Controllers\Admin\Website;

use Alert;
use Illuminate\Http\Request;
use App\Models\BiografiPendiri;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BiografiPendiriController extends Controller
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
            'title'        =>  'Biografi Pendiri',
            'biografi'     =>   BiografiPendiri::first()
        );

        return view('pages.admin.website.biografi.index', $data);
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

        $request->validate([
            'nama'          =>  'required|string|max:50',
            'tmp_lahir'     =>  'required|string|max:20',
            'tgl_lahir'     =>  'required|date',
            'tmp_wafat'     =>  'required|string|max:20',
            'tgl_wafat'     =>  'nullable|date',
            'alamat'        =>  'required|string|max:225',
            'foto'          =>  'mimes:jpeg,png,jpg|max:2048',
            'biografi'      =>  'required|string'
        ]);

        $nama       =   $request->nama;
        $tmp_lahir  =   $request->tmp_lahir;
        $tgl_lahir  =   $request->tgl_lahir;
        $tmp_wafat  =   $request->tmp_wafat;
        $tgl_wafat  =   $request->tgl_wafat;
        $alamat     =   $request->alamat;
        $foto       =   $request->file('foto');
        $biografi   =   $request->biografi;


        if($request->hasFile('foto')){

            $path = $foto->store('public/biografi');

            $data = array(
                'nama'          =>  $nama,
                'tmp_lahir'     =>  $tmp_lahir,
                'tgl_lahir'     =>  $tgl_lahir,
                'tmp_wafat'     =>  $tmp_wafat,
                'tgl_wafat'     =>  $tgl_wafat,
                'alamat'        =>  $alamat,
                'foto'          =>  $path,
                'biografi'      =>  $biografi
            );


            $result = BiografiPendiri::create($data);

            if($result){
                Alert::success('Success', 'Data biografi berhasil di simpan !');
                return redirect()->route('admin.biografi_pendiri.index');
            } else {
                lert::error('Error', 'Data biografi gagal di simpan !');
                return redirect()->route('admin.biografi_pendiri.index');
            }

        } else {

            $data = array(
                'nama'          =>  $nama,
                'tmp_lahir'     =>  $tmp_lahir,
                'tgl_lahir'     =>  $tgl_lahir,
                'tmp_wafat'     =>  $tmp_wafat,
                'tgl_wafat'     =>  $tgl_wafat,
                'alamat'        =>  $alamat,
                'biografi'      =>  $biografi
            );


            $result = BiografiPendiri::create($data);

            if ($result) {
                Alert::success('Success', 'Data biografi berhasil di simpan !');
                return redirect()->route('admin.biografi_pendiri.index');
            } else {
                lert::error('Error', 'Data biografi gagal di simpan !');
                return redirect()->route('admin.biografi_pendiri.index');
            }

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
        $request->validate([
            'nama'          =>  'required|string|max:50',
            'tmp_lahir'     =>  'required|string|max:20',
            'tgl_lahir'     =>  'required|date',
            'tmp_wafat'     =>  'required|string|max:20',
            'tgl_wafat'     =>  'nullable|date',
            'alamat'        =>  'required|string|max:225',
            'foto'          =>  'mimes:jpeg,png,jpg|max:2048',
            'biografi'      =>  'required|string'
        ]);

        $nama       =   $request->nama;
        $tmp_lahir  =   $request->tmp_lahir;
        $tgl_lahir  =   $request->tgl_lahir;
        $tmp_wafat  =   $request->tmp_wafat;
        $tgl_wafat  =   $request->tgl_wafat;
        $alamat     =   $request->alamat;
        $foto       =   $request->file('foto');
        $biografi   =   $request->biografi;

        if ($request->hasFile('foto')) {

            $getFoto = BiografiPendiri::where('id', $id)->first();

            if(!empty($getFoto)){
                Storage::delete($getFoto->foto);
            }

            $path = $foto->store('public/biografi');

            $data = array(
                'nama'          =>  $nama,
                'tmp_lahir'     =>  $tmp_lahir,
                'tgl_lahir'     =>  $tgl_lahir,
                'tmp_wafat'     =>  $tmp_wafat,
                'tgl_wafat'     =>  $tgl_wafat,
                'alamat'        =>  $alamat,
                'foto'          =>  $path,
                'biografi'      =>  $biografi
            );

            $result = BiografiPendiri::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data biografi berhasil di update !');
                return redirect()->route('admin.biografi_pendiri.index');
            } else {
                lert::error('Error', 'Data biografi gagal di update !');
                return redirect()->route('admin.biografi_pendiri.index');
            }

        } else {

            $data = array(
                'nama'          =>  $nama,
                'tmp_lahir'     =>  $tmp_lahir,
                'tgl_lahir'     =>  $tgl_lahir,
                'tmp_wafat'     =>  $tmp_wafat,
                'tgl_wafat'     =>  $tgl_wafat,
                'alamat'        =>  $alamat,
                'biografi'      =>  $biografi
            );

            $result = BiografiPendiri::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data biografi berhasil di update !');
                return redirect()->route('admin.biografi_pendiri.index');
            } else {
                lert::error('Error', 'Data biografi gagal di update !');
                return redirect()->route('admin.biografi_pendiri.index');
            }

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
        $getFoto = BiografiPendiri::where('id', $id)->first();

        if (!empty($getFoto)) {
            Storage::delete($getFoto->foto);
        }

        $result = BiografiPendiri::destroy($id);

        if ($result) {
            Alert::success('Success', 'Data biografi berhasil di reset !');
            return redirect()->route('admin.biografi_pendiri.index');
        } else {
            lert::error('Error', 'Data biografi gagal di reset !');
            return redirect()->route('admin.biografi_pendiri.index');
        }

    }
}

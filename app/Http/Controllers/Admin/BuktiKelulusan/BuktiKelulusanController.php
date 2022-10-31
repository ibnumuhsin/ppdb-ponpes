<?php

namespace App\Http\Controllers\Admin\BuktiKelulusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BuktiKelulusanRequest;
use Alert;
use App\Models\BuktiKelulusan;
use Illuminate\Support\Facades\Storage;

class BuktiKelulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Bukti Kelulusan',
            'bk'    =>  BuktiKelulusan::first()
        );

        return view('pages.admin.bukti.index', $data);
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
    public function store(BuktiKelulusanRequest $request)
    {
        $logo_yayasan       =   $request->file('logo_yayasan');
        $logo_ponpes        =   $request->file('logo_ponpes');
        $header             =   $request->header;
        $alamat             =   $request->alamat;
        $thn_ajaran         =   $request->thn_ajaran;
        $judul              =   $request->judul;
        $body_1             =   $request->body_1;
        $body_2             =   $request->body_2;
        $tempat             =   $request->tempat;
        $tanggal            =   $request->tanggal;
        $jabatan_panitia    =   $request->jabatan_panitia;
        $nama_panitia       =   $request->nama_panitia;
        $ttd_panitia        =   $request->file('ttd_stample_panitia');



        if($request->hasFile('logo_yayasan')
        && $request->hasFile('logo_ponpes')
        && $request->hasFile('ttd_stample_panitia')) {

            $logo_yayasan_path       =   $logo_yayasan->store('public/bukti_kelulusan');
            $logo_ponpes_path        =   $logo_ponpes->store('public/bukti_kelulusan');
            $ttd_panitia_path        =   $ttd_panitia->store('public/bukti_kelulusan');

            $data = array(
                'logo_yayasan'      =>  $logo_yayasan_path,
                'logo_ponpes'       =>  $logo_ponpes_path,
                'header'            =>  $header,
                'alamat'            =>  $alamat,
                'thn_ajaran'        =>  $thn_ajaran,
                'judul'             =>  $judul,
                'body_1'            =>  $body_1,
                'body_2'            =>  $body_2,
                'tempat'            =>  $tempat,
                'tanggal'           =>  $tanggal,
                'jabatan_panitia'   =>  $jabatan_panitia,
                'nama_panitia'      =>  $nama_panitia,
                'ttd_stample_panitia'       =>  $ttd_panitia_path,
            );

            $result =   BuktiKelulusan::create($data);

            if($result) {
                Alert::success('Success', 'Data berhasil di simpan !');
                return redirect()->route('admin.bukti_kelulusan.index');
            } else {
                Alert::error('Error', 'Data gagal di simpan !');
                return redirect()->route('admin.bukti_kelulusan.index');
            }

        } else {
            Alert::error('Error', 'File tidak boleh kosong !');
            return redirect()->route('admin.bukti_kelulusan.index');
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
    public function update(BuktiKelulusanRequest $request, $id)
    {
        $logo_yayasan       =   $request->file('logo_yayasan');
        $logo_ponpes        =   $request->file('logo_ponpes');
        $header             =   $request->header;
        $alamat             =   $request->alamat;
        $thn_ajaran         =   $request->thn_ajaran;
        $judul              =   $request->judul;
        $body_1             =   $request->body_1;
        $body_2             =   $request->body_2;
        $tempat             =   $request->tempat;
        $tanggal            =   $request->tanggal;
        $jabatan_panitia    =   $request->jabatan_panitia;
        $nama_panitia       =   $request->nama_panitia;
        $ttd_panitia        =   $request->file('ttd_stample_panitia');


        $cek = BuktiKelulusan::where('id', $id)->first();


        if($request->hasFile('logo_yayasan')
        && $request->hasFile('logo_ponpes')
        && $request->hasFile('ttd_stample_panitia')) {

            if($cek->logo_yayasan != null
            && $cek->logo_ponpes != null
            && $cek->ttd_stample_panitia != null
            ){
                Storage::delete($cek->logo_yayasan);
                Storage::delete($cek->logo_ponpes);
                Storage::delete($cek->ttd_stample_panitia);
            }

            $logo_yayasan_path       =   $logo_yayasan->store('public/bukti_kelulusan');
            $logo_ponpes_path        =   $logo_ponpes->store('public/bukti_kelulusan');
            $ttd_panitia_path        =   $ttd_panitia->store('public/bukti_kelulusan');

            $data = array(
                'logo_yayasan'      =>  $logo_yayasan_path,
                'logo_ponpes'       =>  $logo_ponpes_path,
                'header'            =>  $header,
                'alamat'            =>  $alamat,
                'thn_ajaran'        =>  $thn_ajaran,
                'judul'             =>  $judul,
                'body_1'            =>  $body_1,
                'body_2'            =>  $body_2,
                'tempat'            =>  $tempat,
                'tanggal'           =>  $tanggal,
                'jabatan_panitia'   =>  $jabatan_panitia,
                'nama_panitia'      =>  $nama_panitia,
                'ttd_stample_panitia'       =>  $ttd_panitia_path,
            );

            $result =   BuktiKelulusan::where('id', $id)->update($data);

            if($result) {
                Alert::success('Success', 'Data berhasil di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            } else {
                Alert::error('Error', 'Data gagal di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            }

        } else if($request->hasFile('logo_yayasan') != null
        && $request->hasFile('logo_ponpes') == null
        && $request->hasFile('ttd_stample_panitia') == null) {

            if($cek->logo_yayasan != null){
                Storage::delete($cek->logo_yayasan);
            }

            $logo_yayasan_path       =   $logo_yayasan->store('public/bukti_kelulusan');

            $data = array(
                'logo_yayasan'      =>  $logo_yayasan_path,
                'header'            =>  $header,
                'alamat'            =>  $alamat,
                'thn_ajaran'        =>  $thn_ajaran,
                'judul'             =>  $judul,
                'body_1'            =>  $body_1,
                'body_2'            =>  $body_2,
                'tempat'            =>  $tempat,
                'tanggal'           =>  $tanggal,
                'jabatan_panitia'   =>  $jabatan_panitia,
                'nama_panitia'      =>  $nama_panitia
            );

            $result =   BuktiKelulusan::where('id', $id)->update($data);

            if($result) {
                Alert::success('Success', 'Data berhasil di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            } else {
                Alert::error('Error', 'Data gagal di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            }

        } else  if($request->hasFile('logo_yayasan') == null
        && $request->hasFile('logo_ponpes') != null
        && $request->hasFile('ttd_stample_panitia') == null) {

            if($cek->logo_ponpes != null){
                Storage::delete($cek->logo_ponpes);
            }

            $logo_ponpes_path        =   $logo_ponpes->store('public/bukti_kelulusan');

            $data = array(
                'logo_ponpes'       =>  $logo_ponpes_path,
                'header'            =>  $header,
                'alamat'            =>  $alamat,
                'thn_ajaran'        =>  $thn_ajaran,
                'judul'             =>  $judul,
                'body_1'            =>  $body_1,
                'body_2'            =>  $body_2,
                'tempat'            =>  $tempat,
                'tanggal'           =>  $tanggal,
                'jabatan_panitia'   =>  $jabatan_panitia,
                'nama_panitia'      =>  $nama_panitia,
            );

            $result =   BuktiKelulusan::where('id', $id)->update($data);

            if($result) {
                Alert::success('Success', 'Data berhasil di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            } else {
                Alert::error('Error', 'Data gagal di update !');
                return redirect()->route('admin.bukti_kelulusan.index');
            }
    } else if($request->hasFile('logo_yayasan') == null
    && $request->hasFile('logo_ponpes') == null
    && $request->hasFile('ttd_stample_panitia') != null) {

        if($cek->ttd_stample_panitia != null){;
            Storage::delete($cek->ttd_stample_panitia);
        }

        $ttd_panitia_path        =   $ttd_panitia->store('public/bukti_kelulusan');

        $data = array(
            'header'            =>  $header,
            'alamat'            =>  $alamat,
            'thn_ajaran'        =>  $thn_ajaran,
            'judul'             =>  $judul,
            'body_1'            =>  $body_1,
            'body_2'            =>  $body_2,
            'tempat'            =>  $tempat,
            'tanggal'           =>  $tanggal,
            'jabatan_panitia'   =>  $jabatan_panitia,
            'nama_panitia'      =>  $nama_panitia,
            'ttd_stample_panitia'       =>  $ttd_panitia_path
        );

        $result =   BuktiKelulusan::where('id', $id)->update($data);

        if($result) {
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        }

    } else  if($request->hasFile('logo_yayasan') == null
    && $request->hasFile('logo_ponpes') == null
    && $request->hasFile('ttd_stample_panitia') == null) {


        $data = array(
            'header'            =>  $header,
            'alamat'            =>  $alamat,
            'thn_ajaran'        =>  $thn_ajaran,
            'judul'             =>  $judul,
            'body_1'            =>  $body_1,
            'body_2'            =>  $body_2,
            'tempat'            =>  $tempat,
            'tanggal'           =>  $tanggal,
            'jabatan_panitia'   =>  $jabatan_panitia,
            'nama_panitia'      =>  $nama_panitia,
        );

        $result =   BuktiKelulusan::where('id', $id)->update($data);

        if($result) {
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        }
    } else if($request->hasFile('logo_yayasan')
    && $request->hasFile('logo_ponpes') == null
    && $request->hasFile('ttd_stample_panitia')) {

        if($cek->logo_yayasan != null
        && $cek->ttd_stample_panitia != null){
            Storage::delete($cek->logo_yayasan);
            Storage::delete($cek->ttd_stample_panitia);
        }

        $logo_yayasan_path       =   $logo_yayasan->store('public/bukti_kelulusan');
        $ttd_panitia_path        =   $ttd_panitia->store('public/bukti_kelulusan');


        $data = array(
            'logo_yayasan'      =>  $logo_yayasan_path,
            'header'            =>  $header,
            'alamat'            =>  $alamat,
            'thn_ajaran'        =>  $thn_ajaran,
            'judul'             =>  $judul,
            'body_1'            =>  $body_1,
            'body_2'            =>  $body_2,
            'tempat'            =>  $tempat,
            'tanggal'           =>  $tanggal,
            'jabatan_panitia'   =>  $jabatan_panitia,
            'nama_panitia'      =>  $nama_panitia,
            'ttd_stample_panitia'       =>  $ttd_panitia_path,
        );

        $result =   BuktiKelulusan::where('id', $id)->update($data);

        if($result) {
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        }
    }else if($request->hasFile('logo_yayasan')
    && $request->hasFile('logo_ponpes')
    && $request->hasFile('ttd_stample_panitia') == null) {

        if($cek->logo_yayasan != null
        && $cek->logo_ponpes != null){
            Storage::delete($cek->logo_yayasan);
            Storage::delete($cek->logo_ponpes);
        }

        $logo_yayasan_path       =   $logo_yayasan->store('public/bukti_kelulusan');
        $logo_ponpes_path        =   $logo_ponpes->store('public/bukti_kelulusan');

        $data = array(
            'logo_yayasan'      =>  $logo_yayasan_path,
            'logo_ponpes'       =>  $logo_ponpes_path,
            'header'            =>  $header,
            'alamat'            =>  $alamat,
            'thn_ajaran'        =>  $thn_ajaran,
            'judul'             =>  $judul,
            'body_1'            =>  $body_1,
            'body_2'            =>  $body_2,
            'tempat'            =>  $tempat,
            'tanggal'           =>  $tanggal,
            'jabatan_panitia'   =>  $jabatan_panitia,
            'nama_panitia'      =>  $nama_panitia,
        );

        $result =   BuktiKelulusan::where('id', $id)->update($data);

        if($result) {
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        }
    }else if($request->hasFile('logo_yayasan') == null
    && $request->hasFile('logo_ponpes')
    && $request->hasFile('ttd_stample_panitia')) {

        if($cek->logo_ponpes != null
        && $cek->ttd_stample_panitia != null){
            Storage::delete($cek->logo_ponpes);
            Storage::delete($cek->ttd_panitia);
        }

        $logo_ponpes_path        =   $logo_ponpes->store('public/bukti_kelulusan');
        $ttd_panitia_path        =   $ttd_panitia->store('public/bukti_kelulusan');

        $data = array(
            'logo_ponpes'       =>  $logo_ponpes_path,
            'header'            =>  $header,
            'alamat'            =>  $alamat,
            'thn_ajaran'        =>  $thn_ajaran,
            'judul'             =>  $judul,
            'body_1'            =>  $body_1,
            'body_2'            =>  $body_2,
            'tempat'            =>  $tempat,
            'tanggal'           =>  $tanggal,
            'jabatan_panitia'   =>  $jabatan_panitia,
            'nama_panitia'      =>  $nama_panitia,
            'ttd_stample_panitia'       =>  $ttd_panitia_path,
        );

        $result =   BuktiKelulusan::where('id', $id)->update($data);

        if($result) {
            Alert::success('Success', 'Data berhasil di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
        } else {
            Alert::error('Error', 'Data gagal di update !');
            return redirect()->route('admin.bukti_kelulusan.index');
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
        //
    }
}

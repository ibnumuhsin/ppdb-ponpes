<?php

namespace App\Http\Controllers\Admin\Status;

use Alert;
use App\Models\User;
use App\Models\Alamat;
use App\Models\Dokumen;
use App\Models\OrangTua;
use App\Models\MateriTes;
use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Models\InformasiTambahan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'         =>      'Verifikasi Pendafatran',
            'verifikasi'    =>      User::orderBy('id', 'DESC')->where('roles', 2)->where('thn_daftar', date('Y'))->get(),
            'mt'            =>      MateriTes::first()
        );

        return view('pages.admin.verifikasi.index', $data);
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

        $bio = User::where('id', $id)->where('roles', 2)->first();

        $data = array(
            'title'         =>      'Biodata Santri: ' . $bio->nama_lengkap,
            'bio'           =>      $bio,
            'ortu'          =>      OrangTua::where('id_user', $id)->first(),
            'sekolah'       =>      AsalSekolah::where('id_user', $id)->first(),
            'info'          =>      InformasiTambahan::where('id_user', $id)->first(),
            'dokumen'       =>      Dokumen::where('id_user', $id)->first(),
            'alamat'        =>      Alamat::where('id_user', $id)->first(),
        );

        return view('pages.admin.verifikasi.bio', $data);
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
            'status_verifikasi'     =>    $request->status_verifikasi,
        );

        $result = User::where('id', $id)->update($data);

        if ($result) {
            Alert::success('Success', 'Status verifikasi berhasil di update !');
            return redirect()->route('admin.verifikasi.index');
        } else {
            Alert::error('Error', 'Status verifikasi berhasil di update !');
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
        return abort(403);
    }

    public function download_foto($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->foto)){
            return Storage::download($data->foto, $data->User->nama_lengkap.'-foto' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }

    public function download_kk($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->kk)){
            return Storage::download($data->kk, $data->User->nama_lengkap.'-KK' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }

    public function download_ktp_ayah($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->ktp_ayah)){
            return Storage::download($data->ktp_ayah, $data->User->nama_lengkap.'-ktp_ayah' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }

    public function download_ktp_ibu($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->ktp_ibu)){
            return Storage::download($data->ktp_ibu, $data->User->nama_lengkap.'-ktp_ibu' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }

    public function download_sktl($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->skl)){
            return Storage::download($data->skl, $data->User->nama_lengkap.'-skl' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }

    public function download_akta($id)
    {
        $data = Dokumen::where('id', $id)->first();

        if(!empty($data->akta_kelahiran)){
            return Storage::download($data->akta_kelahiran, $data->User->nama_lengkap.'-akta_kelahiran' . '.jpg');
        } else {
            Alert::error('Error', 'Gagal download file !');
            return redirect()->back();
        }
    }
}
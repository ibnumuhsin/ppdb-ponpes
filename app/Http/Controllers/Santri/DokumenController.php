<?php

namespace App\Http\Controllers\Santri;

use Alert;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Santri\DokumenRequest;

class DokumenController extends Controller
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
    public function store(DokumenRequest $request)
    {
        $foto               =   $request->file('foto');
        $kk                 =   $request->file('kk');
        $ktp_ayah           =   $request->file('ktp_ayah');
        $ktp_ibu            =   $request->file('ktp_ibu');
        $skl                =   $request->file('skl');
        $akta_kelahiran     =   $request->file('akta_kelahiran');

        $foto_path           =   $foto->store('public/foto');
        $kk_path             =   $kk->store('public/kk');
        $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
        $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
        $skl_path            =   $skl->store('public/skl');
        $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');

        $data = array(
            'id_user'       =>  Auth::user()->id,
            'foto'          =>  $foto_path,
            'kk'            =>  $kk_path,
            'ktp_ayah'      =>  $ktp_ayah_path,
            'ktp_ibu'       =>  $ktp_ibu_path,
            'skl'           =>  $skl_path,
            'akta_kelahiran'=>  $akta_kelahiran_path,
        );

        $result = Dokumen::create($data);

        if ($result) {
            Alert::success('Success', 'Data Dokumen berhasil di simpan !');
            return redirect()->route('santri.biodata.index');
        } else {
            Alert::error('Error', 'Data Dokumen gagal di simpan !');
            return redirect()->route('santri.biodata.index');
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
            'foto'          =>  'nullable|mimes:jpeg,png,jpg|max:2048',
            'kk'            =>  'nullable|mimes:jpeg,png,jpg|max:2048',
            'ktp_ayah'      =>  'nullable|mimes:jpeg,png,jpg|max:2048',
            'ktp_ibu'       =>  'nullable|mimes:jpeg,png,jpg|max:2048',
            'skl'           =>  'nullable|mimes:jpeg,png,jpg|max:2048',
            'akta_kelahiran'=>  'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);


        $foto               =   $request->file('foto');
        $kk                 =   $request->file('kk');
        $ktp_ayah           =   $request->file('ktp_ayah');
        $ktp_ibu            =   $request->file('ktp_ibu');
        $skl                =   $request->file('skl');
        $akta_kelahiran     =   $request->file('akta_kelahiran');

        $del = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->first();

         if ($request->file('foto') == null
         && $request->file('kk') == null
         && $request->file('ktp_ayah') == null
         && $request->file('ktp_ibu') == null
         && $request->file('skl') == null
         && $request->file('akta_kelahiran') == null
        ) {
             Alert::info('Info', 'Tidak ada dokumen yang terupdate !');
             return redirect()->route('santri.biodata.index');
        } elseif ($request->file('foto') != null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $kk_path             =   $kk->store('public/kk');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');

            if(!empty($del->foto) &&
                !empty($del->kk) &&
                !empty($del->ktp_ayah) &&
                !empty($del->ktp_ibu) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)){

                Storage::delete($del->foto);
                Storage::delete($del->kk);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'kk'            =>  $kk_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'skl'           =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if ($request->file('foto') == null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ){
            $kk_path             =   $kk->store('public/kk');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');

            if (!empty($del->kk) &&
                !empty($del->ktp_ayah) &&
                !empty($del->ktp_ibu) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)
            ) {

                Storage::delete($del->kk);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'kk'            =>  $kk_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'skl'           =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }

        } else if (
            $request->file('foto') != null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->foto) &&
                !empty($del->ktp_ayah) &&
                !empty($del->ktp_ibu) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)
            ) {

                Storage::delete($del->foto);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'skl'           =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        }else if (
            $request->file('foto') != null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $kk_path             =   $kk->store('public/kk');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->foto) &&
                !empty($del->kk) &&
                !empty($del->ktp_ibu) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)
            ) {

                Storage::delete($del->foto);
                Storage::delete($del->kk);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'kk'            =>  $kk_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'skl'           =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') != null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $kk_path             =   $kk->store('public/kk');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->foto) &&
                !empty($del->kk) &&
                !empty($del->ktp_ayah) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)
            ) {

                Storage::delete($del->foto);
                Storage::delete($del->kk);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'kk'            =>  $kk_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'skl'           =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') != null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') != null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $kk_path             =   $kk->store('public/kk');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->foto) &&
                !empty($del->kk) &&
                !empty($del->ktp_ayah) &&
                !empty($del->ktp_ibu) &&
                !empty($del->akta_kelahiran)
            ) {

                Storage::delete($del->foto);
                Storage::delete($del->kk);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'kk'            =>  $kk_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') != null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') == null
        ) {

            $foto_path           =   $foto->store('public/foto');
            $kk_path             =   $kk->store('public/kk');
            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');

            if (
                !empty($del->foto) &&
                !empty($del->kk) &&
                !empty($del->ktp_ayah) &&
                !empty($del->ktp_ibu) &&
                !empty($del->skl)
            ) {

                Storage::delete($del->foto);
                Storage::delete($del->kk);
                Storage::delete($del->ktp_ayah);
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
            }

            $data = array(
                'foto'          =>  $foto_path,
                'kk'            =>  $kk_path,
                'ktp_ayah'      =>  $ktp_ayah_path,
                'ktp_ibu'       =>  $ktp_ibu_path,
                'skl'           =>  $skl_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') != null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') == null
        ) {

            $foto_path           =   $foto->store('public/foto');


            if (
                !empty($del->foto)
            ) {

                Storage::delete($del->foto);
            }

            $data = array(
                'foto'          =>  $foto_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') == null
            && $request->file('kk') != null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') == null
        ) {

            $kk_path             =   $kk->store('public/kk');


            if (
                !empty($del->kk)
            ) {
                Storage::delete($del->kk);
            }

            $data = array(
                'kk'            =>  $kk_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') == null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') != null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') == null
        ) {

            $ktp_ayah_path       =   $ktp_ayah->store('public/ktp');


            if (
                !empty($del->ktp_ayah)
            ) {
                Storage::delete($del->ktp_ayah);
            }

            $data = array(
                'ktp_ayah'      =>  $ktp_ayah_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') == null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') == null
        ) {
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');

            if (
                !empty($del->ktp_ibu)
            ) {
                Storage::delete($del->ktp_ibu);
            }

            $data = array(
                'ktp_ibu'       =>  $ktp_ibu_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') == null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') == null
        ) {

            $skl_path            =   $skl->store('public/skl');


            if (
                !empty($del->skl)
            ) {
                Storage::delete($del->skl);
            }

            $data = array(
                'skl'           =>  $skl_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        } else if (
            $request->file('foto') == null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') == null
            && $request->file('skl') == null
            && $request->file('akta_kelahiran') != null
        ) {
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->akta_kelahiran)
            ) {
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
            }
        }elseif (
            $request->file('foto') == null
            && $request->file('kk') == null
            && $request->file('ktp_ayah') == null
            && $request->file('ktp_ibu') != null
            && $request->file('skl') != null
            && $request->file('akta_kelahiran') != null
        ) {
            $ktp_ibu_path        =   $ktp_ibu->store('public/ktp');
            $skl_path            =   $skl->store('public/skl');
            $akta_kelahiran_path =   $akta_kelahiran->store('public/akta_kelahiran');


            if (
                !empty($del->ktp_ibu) &&
                !empty($del->skl) &&
                !empty($del->akta_kelahiran)
            ) {
                Storage::delete($del->ktp_ibu);
                Storage::delete($del->skl);
                Storage::delete($del->akta_kelahiran);
            }

            $data = array(
                'ktp_ibu' =>  $ktp_ibu_path,
                'skl' =>  $skl_path,
                'akta_kelahiran' =>  $akta_kelahiran_path,
            );

            $result = Dokumen::where('id', $id)->where('id_user', Auth::user()->id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data Dokumen berhasil di update !');
                return redirect()->route('santri.biodata.index');
            } else {
                Alert::error('Error', 'Data Dokumen gagal di update !');
                return redirect()->route('santri.biodata.index');
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
        return abort(403);
    }
}

<?php

namespace App\Http\Controllers\Santri;

use Alert;
use App\Models\Alamat;
use App\Models\Regency;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
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
        $request->validate([
            'id_provinsi'   =>  'required',
            'id_kabupaten'  =>  'required',
            'id_kecamatan'  =>  'required',
            'id_kelurahan'  =>  'required',
            'rt'            =>  'required',
            'rw'            =>  'required',
            'alamat'        =>  'required',
        ]);

        $provinsi   =   $request->id_provinsi;
        $kabupaten  =   $request->id_kabupaten;
        $kecamatan  =   $request->id_kecamatan;
        $kelurahan  =   $request->id_kelurahan;
        $rt         =   $request->rt;
        $rw         =   $request->rw;
        $alamat     =   $request->alamat;

        $data = array(
            'id_user'       =>  Auth::user()->id,
            'id_provinsi'   =>  $provinsi,
            'id_kabupaten'  =>  $kabupaten,
            'id_kecamatan'  =>  $kecamatan,
            'id_kelurahan'  =>  $kelurahan,
            'rt'            =>  $rt,
            'rw'            =>  $rw,
            'alamat'        =>  $alamat,
        );

        $result = Alamat::create($data);

        if($result){
            Alert::success('Success', 'Data alamat berhasil disimpan');
            return redirect()->route('santri.biodata.index');
        }else{
            Alert::error('Error', 'Data alamat gagal disimpan');
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
            'id_provinsi'   =>  'required',
            'id_kabupaten'  =>  'required',
            'id_kecamatan'  =>  'required',
            'id_kelurahan'  =>  'required',
            'rt'            =>  'required',
            'rw'            =>  'required',
            'alamat'        =>  'required',
        ]);

        $provinsi   =   $request->id_provinsi;
        $kabupaten  =   $request->id_kabupaten;
        $kecamatan  =   $request->id_kecamatan;
        $kelurahan  =   $request->id_kelurahan;
        $rt         =   $request->rt;
        $rw         =   $request->rw;
        $alamat     =   $request->alamat;

        $data = array(
            'id_user'       =>  Auth::user()->id,
            'id_provinsi'   =>  $provinsi,
            'id_kabupaten'  =>  $kabupaten,
            'id_kecamatan'  =>  $kecamatan,
            'id_kelurahan'  =>  $kelurahan,
            'rt'            =>  $rt,
            'rw'            =>  $rw,
            'alamat'        =>  $alamat,
        );

        $result = Alamat::where('id', $id)->update($data);

        if($result){
            Alert::success('Success', 'Data alamat berhasil di update');
            return redirect()->route('santri.biodata.index');
        }else{
            Alert::error('Error', 'Data alamat gagal di update');
            return redirect()->route('santri.biodata.index');
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

    public function provinsi(Request $request)
    {

        $search = $request->search;

        if($search == ""){    
            $provinsi = Province::all();
        } else {
            $provinsi = Province::where('name', 'like', '%' .$search . '%')->get();
        }

        $response = array();
        foreach($provinsi as $prov){
            $response[] = array(
                "id" => $prov->id,
                "text" => $prov->name
            );
        }

        return response()->json($response);

    }

    public function kabupaten(Request $request, $id)
    {

        $search = $request->search;

        if($search == ""){    
            $kabupaten = Regency::where('province_id', $id)->get();
        } else {
            $kabupaten = Regency::where('province_id', $id)->where('name', 'like', '%' .$search . '%')->get();
        }

        $response = array();
        foreach($kabupaten as $kab){
            $response[] = array(
                "id" => $kab->id,
                "text" => $kab->name
            );
        }

        return response()->json($response);

    }

    public function kecamatan(Request $request, $id)
    {

        $search = $request->search;

        if($search == ""){    
            $kecamatan = District::where('regency_id', $id)->get();
        } else {
            $kecamatan = District::where('regency_id', $id)->where('name', 'like', '%' .$search . '%')->get();
        }

        $response = array();
        foreach($kecamatan as $kec){
            $response[] = array(
                "id" => $kec->id,
                "text" => $kec->name
            );
        }

        return response()->json($response);

    }
    public function desa(Request $request, $id)
    {

        $search = $request->search;

        if($search == ""){    
            $desa = Village::where('district_id', $id)->get();
        } else {
            $desa = Village::where('district_id', $id)->where('name', 'like', '%' .$search . '%')->get();
        }

        $response = array();
        foreach($desa as $des){
            $response[] = array(
                "id" => $des->id,
                "text" => $des->name
            );
        }

        return response()->json($response);
    }

}
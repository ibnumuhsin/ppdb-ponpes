<?php

namespace App\Http\Controllers\Santri\Print;

use App\Models\User;
use App\Models\Alamat;
use App\Models\OrangTua;
use PDF;
use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Models\BuktiKelulusan;
use App\Models\InformasiTambahan;
use App\Http\Controllers\Controller;

class PrintBiodataController extends Controller
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
        $user = User::where('id', $id)->first();

        $bukti = BuktiKelulusan::first();

            $data = array(
                'title'         =>      'Cetak Biodata | ' . $user->nama_lengkap,
                'bukti'         =>      $bukti,
                'user'          =>      $user,
                'alamat'        =>      Alamat::where('id_user', $id)->first(),
                'asal_sekolah'  =>      AsalSekolah::where('id_user', $id)->first(),
                'orangtua'      =>      OrangTua::where('id_user', $id)->first(),
                'info'          =>      InformasiTambahan::where('id_user', $id)->first()
            );

            $contxt = stream_context_create([
                'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
                ]
                ]);
            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
            $pdf->setPaper('A4');
            $pdf->loadView('pages.santri.print.biodata', $data);
            return  $pdf->stream( $user->no_pendaftaran .'-'. $user->nama_lengkap . '-Biodata.pdf');
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
        return abort(403);
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

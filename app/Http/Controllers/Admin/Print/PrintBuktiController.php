<?php

namespace App\Http\Controllers\Admin\Print;

use Alert;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use PDF;
use App\Models\BuktiKelulusan;
use App\Http\Controllers\Controller;


class PrintBuktiController extends Controller
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
        $bukti = BuktiKelulusan::first();

        $user = User::where('id', $id)->first();

        if($bukti == null || empty($bukti)){

            Alert::info('Informasi', 'Maaf, Bukti Kelulusan belum dapat di cetak !');
            return redirect()->route('admin.kelulusan.index');

        } else {

            $data = array(
                'title'     =>      'Cetak Bukti Kelulusan',
                'bukti'     =>      $bukti,
                'user'      =>      $user
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
            $pdf->loadView('pages.admin.print.bukti', $data);
            return  $pdf->stream( $user->no_pendaftaran .'-'. $user->nama_lengkap . '-Bukti-Kelulusan.pdf');
        }
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

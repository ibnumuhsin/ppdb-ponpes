<?php

namespace App\Http\Controllers\Landing;

use Alert;
use App\Models\Alur;
use App\Models\Brosur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BiayaPendidikan;
use App\Models\SyaratDaftar;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = array(
            'title'     => 'Home',
            'alur'      =>  Alur::all(),
            'syarat'    =>  SyaratDaftar::all(),
        );

        return  view('pages.landingpages.index', $data);
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

    public function brosur()
    {
        $brosur = Brosur::first();

        if(empty($brosur)){
            Alert::info('Oopps..', 'Brosur belum tersedia !');
            return redirect()->back();
        } else {
            return Storage::download($brosur->brosur);
        }
    }
}

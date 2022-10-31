<?php

namespace App\Http\Controllers\Admin\Website;

use Alert;
use App\Models\Brosur;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BrosurController extends Controller
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
            'title'     => 'Brosur',
            'brosur'    =>  Brosur::first()
        );

        return view('pages.admin.website.brosur.index', $data);
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
            'brosur' => 'required|file|mimes:jpg,jpeg,png,svg,pdf|max:2048',
        ]);

        if($request->hasFile('brosur')){

            $path = $request->file('brosur')->store('public/brosur');

            $result = Brosur::create([
                'brosur' => $path,
            ]);

            if($result){
                Alert::success('Success', 'Brosur berhasil di simpan !');
                return redirect()->route('admin.brosur.index');
            } else {
                Alert::error('Error', 'Brosur gagal di simpan !');
                return redirect()->route('admin.brosur.index');
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
            'brosur' => 'required|file|mimes:jpg,jpeg,png,svg,pdf|max:2048',
        ]);

        if ($request->hasFile('brosur')) {

            $get = Brosur::where('id', $id)->first();

            if(!empty($get->brosur)){
                Storage::delete($get->brosur);
            }

            $path = $request->file('brosur')->store('public/brosur');

            $result = Brosur::create([
                'brosur' => $path,
            ]);

            if ($result) {
                Alert::success('Success', 'Brosur berhasil di edit !');
                return redirect()->route('admin.brosur.index');
            } else {
                Alert::error('Error', 'Brosur gagal di edit !');
                return redirect()->route('admin.brosur.index');
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

            $get = Brosur::where('id', $id)->first();

            if (!empty($get->brosur)) {
                Storage::delete($get->brosur);
            }

            $result = Brosur::destroy($id);

            if ($result) {
                Alert::success('Success', 'Brosur berhasil di reset !');
                return redirect()->route('admin.brosur.index');
            } else {
                Alert::error('Error', 'Brosur gagal di reset !');
                return redirect()->route('admin.brosur.index');
            }
    }
}

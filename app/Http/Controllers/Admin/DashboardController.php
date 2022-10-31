<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\User;
use App\Models\RegisterIs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'         =>  'Dashboard',
            'register_is'   =>  RegisterIs::first(),
            'user_regis'    =>  User::where('roles', 2)->where('thn_daftar', date('Y'))->count(),
            'lulus'         =>  User::where('status_kelulusan', 1)
                                        ->where('roles', 2)
                                        ->where('thn_daftar', date('Y'))
                                        ->count(),
            'tdk_lulus'     =>  User::where('status_kelulusan', 2)
                                        ->where('roles', 2)
                                        ->where('thn_daftar', date('Y'))
                                        ->count(),
            'admin'         =>  User::where('roles', 1)->count(),
        );

        return view('pages.admin.dashboard', $data);
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
        $result = RegisterIs::where('id', $id)->update([
            'is_open'   =>  $request->is_open
        ]);

        if($result){
            Alert::success('Success', 'Status pendaftaran berhasil di update !');
            return redirect()->route('admin.dashboard.index');
        } else {
            Alert::error('Error', 'Status pendaftaran galal update !');
            return redirect()->route('admin.dashboard.index');
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

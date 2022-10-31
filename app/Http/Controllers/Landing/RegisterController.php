<?php

namespace App\Http\Controllers\Landing;

use Alert;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegisterIs;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Register',
            'is_open'   => RegisterIs::first(),
        );

        return view('pages.landingpages.auth.register', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  abort(404);
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
            'nama_lengkap'  => 'required|string|max:255',
            'nisn'          => 'required|string|min_digits:10|max_digits:11',
            'nik'           => 'required|string|min_digits:16|max_digits:16',
            'jenis_kelamin' => 'required|string',
            'tmp_lahir'     => 'required|string|max:20',
            'tgl_lahir'     => 'required|date',
            'email'         => 'required|string|email|max:255|unique:users',
            'no_telp'       => 'required|string|max:13',
            'password'      => 'required|string|min:8|same:password_confirmation',
        ]);

        $nama           = $request->nama_lengkap;
        $nisn           = $request->nisn;
        $nik            = $request->nik;
        $jk             = $request->jenis_kelamin;
        $tmp_lahir      = $request->tmp_lahir;
        $tgl_lahir      = $request->tgl_lahir;
        $email          = $request->email;
        $no_telp        = $request->no_telp;
        $password       = Hash::make($request->password);

        $MaxId = User::max('id');

        $data   =   array(
            'no_pendaftaran'    => date('Y') . '-' . date('is') . $MaxId,
            'nama_lengkap'      => $nama,
            'nisn'              => $nisn,
            'nik'               => $nik,
            'jenis_kelamin'     => $jk,
            'tmp_lahir'         => $tmp_lahir,
            'tgl_lahir'         => $tgl_lahir,
            'email'             => $email,
            'no_telp'           => $no_telp,
            'status_verifikasi' => 2,
            'status_kelulusan'  => 0,
            'thn_daftar'        => date('Y'),
            'password'          => $password,
            'roles'             => 2
        );


        $user = User::create($data);

        if($user){
            Alert::success('Success', 'Pendaftaran akun berhasil, silahkan login !');
            return redirect()->route('masuk.index');
        } else {
            Alert::error('Error', 'Pendaftaran akun gagal, silahkan coba lagi !');
            return redirect()->route('pendaftaran.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
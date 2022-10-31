<?php

namespace App\Http\Controllers\Admin\User;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\User\SiswaRequest;
use Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'     => 'Data Siswa/i',
            'data'      =>  User::where('roles', 2)->orderBy('id', 'DESC')->get()
        );

        return view('pages.admin.user.siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'     =>      'Tambah Data Siswa/i'
        );

        return view('pages.admin.user.siswa.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $nama           =   $request->nama_lengkap;
        $nisn           =   $request->nisn;
        $nik            =   $request->nik;
        $jenis_kelamin  =   $request->jenis_kelamin;
        $tmp_lahir      =   $request->tmp_lahir;
        $tgl_lahir      =   $request->tgl_lahir;
        $email          =   $request->email;
        $no_telp        =   $request->no_telp;
        $foto_profile   =   $request->file('foto_profile');
        $password       =   Hash::make($request->password);

        if($request->hasFile('foto_profile')){

            $path   =   $foto_profile->store('public/foto_profile');

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'foto_profile'      =>  $path,
                'status_verifikasi' =>  2,
                'status_kelulusan'  =>  0,
                'thn_daftar'        =>  date('Y'),
                'password'          =>  $password,
                'roles'             =>  2
            );

            $result = User::create($data);

            if($result){
                Alert::success('Success', 'Data berhasil di simpan !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di simpan !');
                return redirect()->route('admin.siswa.');
            }

        } else {

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'password'          =>  $password,
                'roles'             =>  2
            );

            $result = User::create($data);

            if ($result) {
                Alert::success('Success', 'Data berhasil di simpan !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di simpan !');
                return redirect()->route('admin.siswa.');
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

        $data = array(
            'title'     =>  'Edit Data',
            'data'      => User::where('id', $id)->first()
        );

        return view('pages.admin.user.siswa.edit',$data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, $id)
    {
        $nama           =   $request->nama_lengkap;
        $nisn           =   $request->nisn;
        $nik            =   $request->nik;
        $jenis_kelamin  =   $request->jenis_kelamin;
        $tmp_lahir      =   $request->tmp_lahir;
        $tgl_lahir      =   $request->tgl_lahir;
        $email          =   $request->email;
        $no_telp        =   $request->no_telp;
        $foto_profile   =   $request->file('foto_profile');
        $password       =   Hash::make($request->password);

        if ($request->hasFile('foto_profile') && $password != null) {

            $cek =  User::where('id', $id)->first();

            if(!empty($cek->foto_profile)){
                Storage::delete($cek->foto_profile);
            }

            $path   =   $foto_profile->store('public/foto_profile');

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'foto_profile'      =>  $path,
                'password'          =>  $password,
                'roles'             =>  2
            );

            $result = User::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data berhasil di edit !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di edit !');
                return redirect()->route('admin.siswa.edit');
            }
        } else if ($request->hasFile('foto_profile') && $password == null) {

            $cek =  User::where('id', $id)->first();

            if (!empty($cek->foto_profile)) {
                Storage::delete($cek->foto_profile);
            }

            $path   =   $foto_profile->store('public/foto_profile');

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'foto_profile'      =>  $path,
                'roles'             =>  2
            );

            $result = User::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data berhasil di edit !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di edit !');
                return redirect()->route('admin.siswa.edit');
            }
        } else if($request->hasFile('foto_profile') == null && $password != null) {

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'password'          =>  $password,
                'roles'             =>  2
            );

            $result = User::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data berhasil di edit !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di edit !');
                return redirect()->route('admin.siswa.edit');
            }
        } else if ($request->hasFile('foto_profile') == null && $password == null) {

            $data = array(
                'nama_lengkap'      =>  $nama,
                'nisn'              =>  $nisn,
                'nik'               =>  $nik,
                'jenis_kelamin'     =>  $jenis_kelamin,
                'tmp_lahir'         =>  $tmp_lahir,
                'tgl_lahir'         =>  $tgl_lahir,
                'email'             =>  $email,
                'no_telp'           =>  $no_telp,
                'roles'             =>  2
            );

            $result = User::where('id', $id)->update($data);

            if ($result) {
                Alert::success('Success', 'Data berhasil di edit !');
                return redirect()->route('admin.siswa.index');
            } else {
                Alert::error('Error', 'Data gagal di edit !');
                return redirect()->route('admin.siswa.edit');
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
        $cek =  User::where('id', $id)->first();

        if (!empty($cek->foto_profile)) {
            Storage::delete($cek->foto_profile);
        }

        $result = User::destroy($id);

        if ($result) {
            Alert::success('Success', 'Data berhasil di hapus !');
            return redirect()->route('admin.siswa.index');
        } else {
            Alert::error('Error', 'Data gagal di hapus !');
            return redirect()->route('admin.siswa.index');
        }
    }
}
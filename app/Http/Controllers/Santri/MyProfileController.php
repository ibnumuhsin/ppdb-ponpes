<?php

namespace App\Http\Controllers\Santri;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Santri\MyProfileRequest;
use Alert;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'     =>      'My Profile'
        );

        return view('pages.santri.profile.profile', $data);
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
    public function update(MyProfileRequest $request, $id)
    {
        if($request->hasFile('foto_profile') != null && $request->password != null){

            $foto = $request->file('foto_profile');

            $check = User::where('id', $id)->first();

            if($check->foto_profile != null){
                Storage::delete($check->foto_profile);
            }

            $path = $foto->store('public/foto_profile');

            $data = array(
                'email'             =>  $request->email,
                'no_telp'           =>  $request->no_telp,
                'password'          =>  Hash::make($request->password),
                'foto_profile'      =>  $path
            );

            $result  =  User::where('id', $id)->update($data);

            if($result){
                Alert::success('Success', 'Profile berhasil di update !');
                 return redirect()->route('santri.my_profile.index');
            } else {
                Alert::error('Error', 'Profile gagal di update !');
                return redirect()->route('santri.my_profile.index');
            }

        } if($request->hasFile('foto_profile') != null && $request->password == null){

            $foto = $request->file('foto_profile');

            $check = User::where('id', $id)->first();

            if($check->foto_profile != null){
                Storage::delete($check->foto_profile);
            }

            $path = $foto->store('public/foto_profile');

            $data = array(
                'email'             =>  $request->email,
                'no_telp'           =>  $request->no_telp,
                'foto_profile'      =>  $path
            );

            $result  =  User::where('id', $id)->update($data);

            if($result){
                Alert::success('Success', 'Profile berhasil di update !');
                 return redirect()->route('santri.my_profile.index');
            } else {
                Alert::error('Error', 'Profile gagal di update !');
                return redirect()->route('santri.my_profile.index');
            }

        } else if($request->hasFile('foto_profile') == null && $request->password != null){

            $data = array(
                'email'             =>  $request->email,
                'no_telp'           =>  $request->no_telp
            );

            $result  =  User::where('id', $id)->update($data);

            if($result){
                Alert::success('Success', 'Profile berhasil di update !');
                 return redirect()->route('santri.my_profile.index');
            } else {
                Alert::error('Error', 'Profile gagal di update !');
                return redirect()->route('santri.my_profile.index');
            }

        } else if($request->hasFile('foto_profile') == null && $request->password == null){

            $data = array(
                'email'             =>  $request->email,
                'no_telp'           =>  $request->no_telp
            );

            $result  =  User::where('id', $id)->update($data);

            if($result){
                Alert::success('Success', 'Profile berhasil di update !');
                return redirect()->route('santri.my_profile.index');
            } else {
                Alert::error('Error', 'Profile gagal di update !');
                return redirect()->route('santri.my_profile.index');
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
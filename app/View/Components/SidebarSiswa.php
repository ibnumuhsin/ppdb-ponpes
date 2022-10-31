<?php

namespace App\View\Components;

use App\Models\Alamat;
use App\Models\OrangTua;
use App\Models\AsalSekolah;
use Illuminate\View\Component;
use App\Models\InformasiTambahan;
use Illuminate\Support\Facades\Auth;

class SidebarSiswa extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data = array(
                'alamat'        =>      Alamat::where('id_user', Auth::user()->id)->first(),
                'asal_sekolah'  =>      AsalSekolah::where('id_user', Auth::user()->id)->first(),
                'orangtua'      =>      OrangTua::where('id_user', Auth::user()->id)->first(),
                'info'          =>      InformasiTambahan::where('id_user', Auth::user()->id)->first()
            );

        return view('components.dashboardsiswa.sidebar-siswa', $data);
    }
}

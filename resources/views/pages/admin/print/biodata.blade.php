<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | PPDB PonPes Bahrul Maghfiroh</title>

</head>

<style>
    .center {
        text-align: center;
    }

    .header.top {
        border-top: solid 2px black;
    }

    .body {
        text-align: justify
    }
</style>

<body>
    <table width="100%">
        <tbody>
            <tr>
                <th width="15%"><img src="{{ asset('logo/logo_yayasan.jpeg') }}" alt=""
                        width="100%">
                <th width="70%">
                    <h4>PENERIMAAN PESERTA DIDIK BARU</h4>
                    <h4>PONDOK PESANTREN BAHRUL MAGHFIROH</h4>
                    <h4>YAYASAN LUKMAN AL-KARIM ABDULLAH FATTAH</h4>
                </th>
                </th>
                <th><img src="{{ asset('logo/logo_ponpes.png') }}" alt=""
                        width="100%"></th>
            </tr>
        </tbody>
    </table>
    <span class="center">
        {!! $bukti->alamat == null ?'<p>Jl. Tegal Rotan No. 72, Kel. Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan 15413</p>' : $bukti->alamat !!}
        <h4 style="font-weight: bold;">BIODATA SANTRI BARU</h4>
    </span>

    <table>
        <tbody>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $user->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td>{{ $user->nisn }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $user->tmp_lahir }}, {{ $user->tgl_lahir->format('d, M Y') }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $user->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Alamat Calon Santri</td>
                <td>:</td>
                <td>
                    {{-- {{ $alamat == null || $alamat->alamat == null ? '-' : $alamat->alamat }} --}}
                    {{ $alamat == null || $alamat->alamat == null ? '-' : $alamat->alamat .
                        ', Rt/Rw ' . $alamat->rt .' / '. $alamat->rw . ', ' . $alamat->Kelurahan->name .', '.
                        $alamat->Kecamatan->name . ', ' . $alamat->Kabupaten->name . ', ' .
                        $alamat->Provinsi->name }} 
                </td>
                
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>{{ $asal_sekolah == null || $asal_sekolah->nama_sekolah == null ? '-' : $asal_sekolah->nama_sekolah}}</td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td>:</td>
                <td>{{ $asal_sekolah == null || $asal_sekolah->thn_lulus == null ? '-' : $asal_sekolah->thn_lulus }}</td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->nama_ayah == null ? '-' : $orangtua->nama_ayah }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pekerjaan_ayah == null ? '-' : $orangtua->pekerjaan_ayah }}</td>
            </tr>
            <tr>
                <td>Pendidikan Ayah</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pendidikan_ayah == null ? '-' : $orangtua->pendidikan_ayah }}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->nama_ibu == null ? '-' : $orangtua->nama_ibu }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pekerjaan_ibu == null ? '-' : $orangtua->pekerjaan_ibu }}</td>
            </tr>
            <tr>
                <td>Pendidikan Ibu</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pendidikan_ibu == null ? '-' : $orangtua->pendidikan_ibu }}</td>
            </tr>
            <tr>
                <td>No Telephon Orang Tua</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->no_telp_ortu == null ? '-' : $orangtua->no_telp_ortu }}</td>
            </tr>
            <tr>
                <td>Nama Wali</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->nama_wali == null ? '-' : $orangtua->nama_wali }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pekerjaan_wali == null ? '-' : $orangtua->pekerjaan_wali }}</td>
            </tr>
            <tr>
                <td>Pendidikan Wali</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->pendidikan_wali == null ? '-' : $orangtua->pendidikan_wali }}</td>
            </tr>
            <tr>
                <td>No Telephon Wali</td>
                <td>:</td>
                <td>{{ $orangtua == null || $orangtua->no_telp_wali == null ? '-' : $orangtua->no_telp_wali}}</td>
            </tr>
            <tr>
                <td>Minat Bakat</td>
                <td>:</td>
                <td>{{ $info == null || $info->minat_bakat == null ? '-' : $info->minat_bakat }}</td>
            </tr>
            <tr>
                <td>Riwayat Penyakit</td>
                <td>:</td>
                <td>{{ $info == null || $info->riwayat_penyakit == null ? '-' : $info->riwayat_penyakit }}</td>
            </tr>
        </tbody>
    </table>

    @if($user->foto_profile != null)
        <div style="margin-top: 10px">
            <img src="{{ asset('storage/' . Str::substr($user->foto_profile, 7)) }}" alt=""
                        width="20%">
        </div>
    @endif

</body>


</html>

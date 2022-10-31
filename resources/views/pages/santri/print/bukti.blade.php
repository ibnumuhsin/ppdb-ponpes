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
                <th width="15%"><img src="{{ asset('storage/' . Str::substr($bukti->logo_yayasan, 7)) }}" alt=""
                        width="100%">
                <th width="70%"> {!! $bukti->header !!}</th>
                </th>
                <th><img src="{{ asset('storage/' . Str::substr($bukti->logo_ponpes, 7)) }}" alt=""
                        width="100%"></th>
            </tr>
        </tbody>
    </table>
    <span class="center">
        {!! $bukti->alamat !!}
        {!! $bukti->judul !!}
    </span>

    <div class="body">
        {!! $bukti->body_1 !!}
        <table style="margin-left: 50px;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ Auth::User()->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>No. Pendaftaran</td>
                <td>:</td>
                <td>{{ Auth::User()->no_pendaftaran }}</td>
            </tr>
        </table>
        <p>Dinyatakan <span>
                @if (Auth::user()->status_kelulusan == 1)
                    <span style="font-weight:bold;">LULUS/DITERIMA</span>
                @elseif(Auth::user()->status_kelulusan == 2)
                    <span style="font-weight:bold;">TIDAK LULUS/TIDAK DITERIMA</span>
                @endif
            </span> sebagai santri baru tahun ajaran {{ $bukti->thn_ajaran }}.</p>
        {!! $bukti->body_2 !!}
    </div>
    <section>
        <div style="margin-left: 450px">
            <p>{{ $bukti->tempat }}, {{ $bukti->tanggal->format('d, M Y') }}</p>
            <p>{{ $bukti->jabatan_panitia }}</p>
            <img src="{{ asset('storage/' . Str::substr($bukti->ttd_stample_panitia, 7)) }}" alt=""
                width="35%">
            <p style="font-weight: bold">{{ $bukti->nama_panitia }}</p>
        </div>
    </section>
</body>


</html>

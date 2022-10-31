<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuktiKelulusan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bukti_kelulusan';

    protected $fillable = [
        'logo_yayasan',
        'logo_ponpes',
        'header',
        'alamat',
        'thn_ajaran',
        'judul',
        'body_1',
        'body_2',
        'tempat',
        'tanggal',
        'jabatan_panitia',
        'nama_panitia',
        'ttd_stample_panitia',
        'stample',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'tanggal'   => 'datetime',
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BiografiPendiri extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'biografi_pendiri';

    protected $fillable = [
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'tmp_wafat',
        'tgl_wafat',
        'alamat',
        'biografi',
        'foto',
        'deskripsi',
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
        'tgl_lahir' => 'datetime',
        'tgl_wafat' => 'datetime',
    ];
}

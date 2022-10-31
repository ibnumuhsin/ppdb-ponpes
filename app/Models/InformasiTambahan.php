<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformasiTambahan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'informasi_tambahan';

    protected $fillable = [
        'id_user',
        'minat_bakat',
        'riwayat_penyakit',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function User()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }

}

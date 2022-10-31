<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrangTua extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'orang_tua';

    protected $fillable = [
        'id_user',
        'nama_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'no_telp_ortu',
        'penghasilan_ortu',
        'nama_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'no_telp_wali',
        'penghasilan_wali',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alamat extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'alamat';

    protected $fillable = [
        'id_user',
        'id_provinsi',
        'id_kabupaten',
        'id_kecamatan',
        'id_kelurahan',
        'alamat',
        'rt',
        'rw',
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

    public function Provinsi()
    {
        return $this->belongsTo('\App\Models\Province', 'id_provinsi', 'id');
    }

    public function Kabupaten()
    {
        return $this->belongsTo('\App\Models\Regency', 'id_kabupaten', 'id');
    }

    public function Kecamatan()
    {
        return $this->belongsTo('\App\Models\District', 'id_kecamatan', 'id');
    }

    public function Kelurahan()
    {
        return $this->belongsTo('\App\Models\Village', 'id_kelurahan', 'id');
    }

}
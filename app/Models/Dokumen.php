<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokumen extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'dokumen';

    protected $fillable = [
        'id_user',
        'foto',
        'kk',
        'ktp_ayah',
        'ktp_ibu',
        'skl',
        'akta_kelahiran',
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

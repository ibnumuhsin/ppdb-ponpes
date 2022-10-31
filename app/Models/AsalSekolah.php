<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsalSekolah extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'asal_sekolah';

    protected $fillable = [
        'id_user',
        'nama_sekolah',
        'thn_lulus',
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
        return $this->belongsTo('App\Models\Users', 'id_user', 'id');
    }
}

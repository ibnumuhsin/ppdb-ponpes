<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BiayaPendidikan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'biaya_pendidikan';

    protected $fillable = [
        'rincian',
        'biaya',
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
}

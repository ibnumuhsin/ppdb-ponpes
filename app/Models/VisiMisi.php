<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisiMisi extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'visi_misi';

    protected $fillable = [
        'visi',
        'misi',
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

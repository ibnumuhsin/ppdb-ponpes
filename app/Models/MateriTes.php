<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MateriTes extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'materi_test';

    protected $fillable = [
        'materi_test',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

}

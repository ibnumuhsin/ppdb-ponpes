<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brosur extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'brosur';

    protected $fillable = [
        'brosur',
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

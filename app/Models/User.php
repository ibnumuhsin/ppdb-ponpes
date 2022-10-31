<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table = 'users';

    protected $fillable = [
            'no_pendaftaran',
            'nama_lengkap',
            'nisn',
            'nik',
            'jenis_kelamin',
            'tmp_lahir',
            'tgl_lahir',
            'email',
            'no_telp',
            'foto_profile',
            'status_verifikasi',
            'status_kelulusan',
            'thn_daftar',
            'password',
            'roles'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'tgl_lahir'         => 'datetime',
    ];

    public function Alamat()
    {
        return $this->hasMany('App\Models\Alamat', 'id_user');
    }

    public function OrangTua()
    {
        return $this->hasMany('App\Models\OrangTua', 'id_user');
    }

    public function AsalSekolah()
    {
        return $this->hasMany('App\Models\AsalSekolah', 'id_user');
    }

    public function Dokumen()
    {
        return $this->hasMany('App\Models\Dokumen', 'id_user');
    }

    public function InformasiTambahan()
    {
        return $this->hasMany('App\Models\InformasiTambahan', 'id_user');
    }

}
<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RegisterIs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'nama_lengkap'      =>  'Administrator',
            'jenis_kelamin'     =>  'L',
            'tmp_lahir'         =>  'Jakarta',
            'tgl_lahir'         =>  '1999-01-01',
            'email'             =>  'admin@gmail.com',
            'password'          =>   Hash::make(12345678),
            'roles'             =>  1
        ]);

        User::insert($data);

        RegisterIs::create([
            'is_open'   => 2
        ]);
    }
}
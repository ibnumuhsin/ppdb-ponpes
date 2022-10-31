<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nisn', 16)->nullable();
            $table->string('nik', 16)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tmp_lahir', 20);
            $table->date('tgl_lahir');
            $table->string('email', 50)->nullable();
            $table->string('no_telp', 15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('foto_profile')->nullable();
            $table->string('password');
            $table->enum('roles', [1,2]);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
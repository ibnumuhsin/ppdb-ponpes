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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index('orang_tua_to_users');
            $table->string('nama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('no_telp_ortu');
            $table->string('penghasilan_ortu');
            $table->string('nama_wali');
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
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
        Schema::dropIfExists('orang_tua');
    }
};
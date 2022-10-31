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
        Schema::create('bukti_kelulusan', function (Blueprint $table) {
            $table->id();
            $table->string('logo_yayasan');
            $table->string('logo_ponpes');
            $table->longText('header');
            $table->string('alamat');
            $table->string('thn_ajaran');
            $table->longText('judul');
            $table->longText('body_1');
            $table->longText('body_2');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('jabatan_panitia');
            $table->string('nama_panitia');
            $table->string('ttd_stample_panitia');
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
        Schema::dropIfExists('bukti_kelulusan');
    }
};

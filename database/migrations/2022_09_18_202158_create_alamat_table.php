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
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index('alamat_to_users');
            $table->char('id_provinsi', 15);
            $table->char('id_kabupaten', 15);
            $table->char('id_kecamatan', 15);
            $table->char('id_kelurahan', 15);
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->foreign('id_provinsi')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kabupaten')
                ->references('id')
                ->on('regencies')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kecamatan')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kelurahan')
                ->references('id')
                ->on('villages')
                ->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('alamat');
    }
};
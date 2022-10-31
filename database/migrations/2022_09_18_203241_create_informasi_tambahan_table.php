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
        Schema::create('informasi_tambahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index('informasi_tambahan_to_users');
            $table->string('minat_bakat')->nullable();
            $table->string('riwayat_penyakit')->nullable();
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
        Schema::dropIfExists('informasi_tambahan');
    }
};

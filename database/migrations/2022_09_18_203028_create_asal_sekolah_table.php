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
        Schema::create('asal_sekolah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index('asal_sekolah_to_users');
            $table->string('nama_sekolah');
            $table->string('thn_lulus');
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
        Schema::dropIfExists('asal_sekolah');
    }
};

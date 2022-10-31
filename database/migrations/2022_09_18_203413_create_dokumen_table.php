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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index('dokumen_to_users');
            $table->string('foto')->nullable();
            $table->string('kk')->nullable();
            $table->string('ktp_ayah')->nullable();
            $table->string('ktp_ibu')->nullable();
            $table->string('skl')->nullable();
            $table->string('akta_kelahiran')->nullable();
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
        Schema::dropIfExists('dokumen');
    }
};

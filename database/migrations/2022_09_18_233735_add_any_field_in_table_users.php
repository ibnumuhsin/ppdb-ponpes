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
        Schema::table('users', function (Blueprint $table) {
            $table->string('no_pendaftaran', 20)->nullable()->after('id');
            $table->string('status_verifikasi',2)->default(2)->nullable()->after('foto_profile');
            $table->string('status_kelulusan',2)->default(0)->nullable()->after('status_verifikasi');
            $table->string('thn_daftar', 5)->nullable()->after('status_kelulusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('no_pendaftaran');
            $table->dropColumn('status_verifikasi');
            $table->dropColumn('status_kelulusan');
        });
    }
};
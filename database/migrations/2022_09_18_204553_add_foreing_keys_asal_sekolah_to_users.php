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
        Schema::table('asal_sekolah', function (Blueprint $table) {
            $table->foreign('id_user', 'asal_sekolah_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asal_sekolah', function (Blueprint $table) {
            $table->dropForeign('asal_sekolah_to_users');
        });
    }
};

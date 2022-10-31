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
        Schema::table('biografi_pendiri', function (Blueprint $table) {
            $table->string('tmp_lahir', 20)->after('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biografi_pendiri', function (Blueprint $table) {
            $table->dropColumn('tmp_lahir');
        });
    }
};

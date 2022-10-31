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
            $table->string('tmp_wafat', 20)->nullable()->after('tgl_lahir');
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
            $table->dropColumn('tmp_wafat');
        });
    }
};

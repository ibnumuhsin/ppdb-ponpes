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
        Schema::create('biografi_pendiri', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->date('tgl_lahir');
            $table->date('tgl_wafat')->nullable();
            $table->string('alamat');
            $table->longText('biografi');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('biografi_pendiri');
    }
};

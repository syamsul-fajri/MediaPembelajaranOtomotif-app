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
        Schema::table('classes', function (Blueprint $table) {
            $table->string('nama_kelas');
            $table->string('kode_kelas')->unique();
        });
    }

    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn(['nama_kelas', 'kode_kelas']);
        });
    }
    };
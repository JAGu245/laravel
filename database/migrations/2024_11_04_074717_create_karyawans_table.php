<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('pangkat');
            $table->string('divisi');
            $table->string('dealer');
            $table->string('posisi');
            $table->string('divisi_ho')->nullable(); // Jika divisi HO tidak selalu ada
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}

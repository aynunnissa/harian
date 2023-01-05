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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('tema', 100);
            $table->string('tipe', 50);
            $table->string('judul', 100);
            $table->text('deskripsi_singkat');
            $table->string('nama_pembicara', 100);
            $table->text('deskripsi_singkat_pembicara');
            $table->text('poin_materi');
            $table->text('rangkaian_materi');
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
        Schema::dropIfExists('kelas');
    }
};

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
        Schema::create('siswa_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nis',20)->unique();
            $table->string('jk', 20);
            $table->string('no_tlp', 20);
            $table->string('alamat',200);
            $table->date('tanggal_lahir');
            $table->string('Tempat_lahir', 20);
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
        Schema::dropIfExists('siswa_tabel');
    }
};

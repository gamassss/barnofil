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
        Schema::create('programs', function (Blueprint $table) {
					$table->id();
					$table->string('nama');
					$table->string('kategori');
					$table->string('deskripsi');
					$table->string('status'); // Disetujui, Ditolak, Menunggu
					$table->decimal('total_dana', $precision = 9, $scale = 2);
					$table->decimal('target_dana', $precision = 9, $scale = 2);
					$table->date('tanggal_mulai');
					$table->date('tanggal_berakhir');
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
        Schema::dropIfExists('programs');
    }
};

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
					$table->foreignId('user_id');
					$table->foreignId('kategori_id')->nullable();
					$table->string('nama');
					$table->text('deskripsi');
					$table->string('status')->default('menunggu'); // Disetujui, Ditolak, Menunggu
					$table->bigInteger('total_dana')->default(0);
					$table->bigInteger('target_dana');
					$table->string('banner_img')->nullable();
					$table->date('tanggal_mulai');
					$table->date('tanggal_berakhir');
					$table->timestamps();
					$table->softDeletes($column = 'deleted_at', $precision = 0);
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

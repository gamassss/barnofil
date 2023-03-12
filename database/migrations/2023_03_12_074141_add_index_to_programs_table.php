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
        Schema::table('programs', function (Blueprint $table) {
            $table->index('kategori_id');
            $table->index('nama');
            $table->index('target_dana');
            $table->index('total_dana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropIndex('programs_kategori_id');
            $table->dropIndex('programs_nama_index');
            $table->dropIndex('programs_target_dana_index');
            $table->dropIndex('programs_total_dana_index');
        });
    }
};

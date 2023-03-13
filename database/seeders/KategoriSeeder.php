<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kategories = ['Kegiatan Sosial', 'Lingkungan', 'Bencana Alam', 'Kemanusiaan'];

			foreach($kategories as $kategori) {
				Kategori::create([
					'nama_kategori' => $kategori
				]);
			}
    }
}

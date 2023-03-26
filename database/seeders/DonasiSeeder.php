<?php

namespace Database\Seeders;

use App\Models\Donasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10000; $i++) {
					Donasi::create([
						'user_id' => rand(0, 800),
						'program_id' => rand(0, 1300),
						'amount' => rand(30000, 150000),
						'anonim' => true
					]);
				}
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTime;
use App\Models\User;
use Database\Seeders\DoaSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DonasiSeeder;
use Database\Seeders\ProgramSeeder;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime();
        $todayStr = $today->format('Y-m-d');
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => $todayStr,
            'password' => Hash::make('123'),
            'role' => 'admin',
						'email_verified' => true
        ]);

        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            KategoriSeeder::class,
        ]);

        $this->call([
            ProgramSeeder::class,
        ]);

				$this->call([
					DonasiSeeder::class
				]);
				
				$this->call([
					DoaSeeder::class
				]);
    }
}

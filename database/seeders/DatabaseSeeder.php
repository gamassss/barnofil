<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\ProgramSeeder;
use Illuminate\Database\Seeder;
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
        ]);

        $this->call([
            ProgramSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Trần Thanh Tùng',
            'email' => 'tungtt.devops@gmail.com',
            'password' => 'tungtt',
        ]);
        $this->call([
            ItemSeeder::class,
            ConditionSeeder::class,
            CategorySeeder::class,
        ]);
    }
}

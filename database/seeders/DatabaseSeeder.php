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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('admin'),
            'is_admin' => true,
            'is_verified' => true,
            'is_alumini' => false,
        ]);
        // User::factory()->create([
        //     'name' => 'Darshan Bhandary',
        //     'email' => 'drshnbhandary@gmail.com',
        //     'password'=> bcrypt('12345678'),
        //     'is_admin' => false,
        //     'is_verified' => true,
        //     'is_alumini' => false,
        // ]);
    }
}

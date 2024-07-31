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
            'name' => 'Abishek',
            'email' => 'abiarun7708@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'superadmin@superadmin.com',
        ]);
        User::factory()->create([
            'name' => 'Abishek',
            'email' => 'admin@admin.com',
        ]);
        User::factory()->create([
            'name' => 'Abishek',
            'email' => 'user@user.com',
        ]);
    }
}

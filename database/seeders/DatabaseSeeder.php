<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Role::factory()->create([
           'name' => 'Admin',
           'description' => 'Super Admin',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'president club',
            'description' => 'president',
         ]);
         \App\Models\Role::factory()->create([
            'name' => 'member',
            'description' => 'member club',
         ]);

        $this->call(AdminSeeder::class);
    }
}

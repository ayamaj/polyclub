<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}

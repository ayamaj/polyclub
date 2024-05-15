<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Permission::factory()->create([
            'name' => 'roles',

         ]);
         \App\Models\Permission::factory()->create([
             'name' => 'permissions',

          ]);
          \App\Models\Permission::factory()->create([
            'name' => 'create_user',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'action_user',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'create_club',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'action_club',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'create_event',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'action_event',

         ]);
         \App\Models\Permission::factory()->create([
            'name' => 'request_resource',

         ]);



    }
}

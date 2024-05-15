<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password'=> bcrypt('admin'),
             'role_id' => 1,
            //  'permissions' => ['roles', 'permissions', 'create_user', 'action_user','create_club','action_club','create_event','action_event','request_resource']


         ]);

    }
}

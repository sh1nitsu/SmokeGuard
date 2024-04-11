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

        \App\Models\User::factory()->create([
            'role' => 'admin',
            'first_name' => 'Karl',
            'last_name' => 'Doctolero',
            'middle_name' => 'Tan',
            'name' => 'Admin Karl',
            'birthday' => '2002-05-26',
            'address' => 'BLK38 LOT10 Middle East St. HH!, SJDM Bulacan',
            'phone' => '09659404774',
            'email' => 'admin@c.c',
            'password' => '12345'
        ]);

        \App\Models\User::factory()->create([
            'role' => 'client',
            'first_name' => 'Justine',
            'last_name' => 'Corona',
            'middle_name' => 'Don',
            'name' => 'Justin Corona',
            'birthday' => '2002-05-26',
            'address' => 'BLK38 LOT10 Middle East St. HH!, SJDM Bulacan',
            'phone' => '34534534554',
            'email' => 'justine@c.c',
            'password' => '12345'
        ]);
    }
}

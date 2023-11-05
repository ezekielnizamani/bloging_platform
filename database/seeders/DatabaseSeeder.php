<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 0,
            
        ]);
        \App\Models\User::factory()->create([
            'name' => 'hizqeel',
            'email' =>'hizqeel@gmail.com',
            'password' => Hash::make('hizqeel'),
            'role' => 1,

        ]);
        \App\Models\User::factory()->create([
            'name' => 'john',
            'email' =>'john@gmail.com',
            'password' => Hash::make('john'),
            'role' => 2,

        ]);
    }
}

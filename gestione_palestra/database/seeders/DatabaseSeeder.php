<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'io@example.com',
             'password' => Hash::make('Pa$$w0rd!')
         ]);

        $this->call(UserSeeder::class);
        $this->call(CorsiSeeder::class);
        $this->call(PrenotazioniSeeder::class);
    }
}
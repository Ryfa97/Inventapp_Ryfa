<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // Membuat data dummy sebanyak 10 user
        User::create([
            'name' => 'Admin',
            'email' => 'ryfa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        // membuat sebuah user bernama admin
    }
}

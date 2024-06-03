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
            'name' => 'Ryfa',
            'email' => 'ryfa@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Admin',
            'password' => Hash::make('password')
        ]);
        // membuat sebuah user bernama admin
        User::create([
            'name' => 'Taufik',
            'email' => 'taufik@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Teknisi',
            'password' => Hash::make('password')
        ]);
        // membuat sebuah user bernama teknisi
        User::create([
            'name' => 'Salwa',
            'email' => 'salwa@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Kepala',
            'password' => Hash::make('password')
        ]);
        // membuat sebuah user bernama admin
    }
}

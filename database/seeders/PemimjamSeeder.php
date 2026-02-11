<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PemimjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where("role", "pemimjam")->exists()) {
            User::create([
                'name' => 'Peminjam',
                'email' => 'peminjam@a.com',
                'password' => Hash::make('password'),
                'role' => 'peminjam',
            ]);
        }
    }
}

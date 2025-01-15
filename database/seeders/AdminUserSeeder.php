<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sakhanya',
            'surname' => 'Swartbooi',
            'email' => 'admin@kasikota.com',
            'password' => Hash::make('adminPass@word1'),
            'role_id' => 1,
        ]);
    }
}

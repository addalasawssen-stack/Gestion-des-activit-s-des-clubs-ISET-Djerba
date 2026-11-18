<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@iset.tn')],
            ['name' => 'Administrateur ISET', 'password' => Hash::make(env('ADMIN_PASSWORD', 'ChangeMe123!')), 'role' => 'admin'],
        );
    }
}

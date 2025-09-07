<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@dinsos.go.id'],
            [
                'name' => 'Admin dinsos',
                'password' => Hash::make('admindinsos123'),
                'role' => 'admin',
            ]
        );
    }
}

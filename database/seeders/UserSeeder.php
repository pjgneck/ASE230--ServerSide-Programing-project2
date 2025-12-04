<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'department_id' => 1,
            'token' => Str::random(60),
        ]);

        User::create([
            'username' => 'sales_user',
            'password' => Hash::make('password'),
            'department_id' => 2,
            'token' => Str::random(60),
        ]);

        User::create([
            'username' => 'hr_user',
            'password' => Hash::make('password'),
            'department_id' => 3,
            'token' => Str::random(60),
        ]);

        User::create([
            'username' => 'marketing_user',
            'password' => Hash::make('password'),
            'department_id' => 4,
            'token' => Str::random(60),
        ]);
    }
}

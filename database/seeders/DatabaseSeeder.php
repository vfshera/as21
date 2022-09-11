<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'First User',
            'email' => 'userone@mail.com',
            'password' => Hash::make('123456789'),
        ]);

        Admin::create([
            'name' => 'General Admin',
            'email' => 'adminone@mail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
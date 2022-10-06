<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Order;
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

        Admin::create([
            'name' => 'Admin One',
            'email' => 'admin@as21.com',
            'password' => Hash::make('123456789'),
            'email_verified_at' => now(),
            'status' => 1,
        ]);

        User::factory()
            ->count(5)
            ->has(
                Order::factory()
                    ->count(3)
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id];
                    }))
            ->create();

        $this->call([
            AcademicLevelSeeder::class,
            PaperTypeSeeder::class,
            CustomerReviewSeeder::class,
            SubjectAreaSeeder::class,
        ]);
    }
}
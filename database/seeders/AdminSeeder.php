<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        if ($email && $password) {
            \App\Models\Admin::updateOrCreate(
                ['email' => $email],
                [
                    'name' => 'Administrator',
                    'password' => \Illuminate\Support\Facades\Hash::make($password),
                ]
            );
        }
    }
}

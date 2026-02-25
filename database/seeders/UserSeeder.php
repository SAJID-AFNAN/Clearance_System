<?php

namespace Database\Seeders;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        User::insert([
            [
                'id' => 1,
                'name' => "admin mg mg",
                'email' => "admin@gmail.com",
                'password' => Hash::make('123456789'),
                'role_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => "teacher aye aye",
                'email' => "teacher@gmail.com",
                'password' => Hash::make('123456789'),
                'role_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => "student ko ko",
                'email' => "student@gmail.com",
                'password' => Hash::make('123456789'),
                'role_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 4,
                'name' => "student ma ma",
                'email' => "mama@gmail.com",
                'password' => Hash::make('123456789'),
                'role_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 5,
                'name' => "student Moe kaung",
                'email' => "moekaung@gmail.com",
                'password' => Hash::make('123456789'),
                'role_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Josep',
            'role' => 'admin',
            'email' => 'josep@monlau.com',
            'password' => Hash::make('Monlau2021'),
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'role' => 'teacher',
            'email' => 'carlos@monlau.com',
            'password' => Hash::make('Monlau2021'),
        ]);
        DB::table('users')->insert([
            'name' => 'Carles',
            'role' => 'student',
            'email' => 'carles@monlau.com',
            'password' => Hash::make('Monlau2021'),
        ]);
    }
}




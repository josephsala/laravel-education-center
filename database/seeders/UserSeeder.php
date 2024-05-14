<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAdmin();
        $this->createTeacher();
        $this->createStudent();
    }

    private function createAdmin(): void
    {
        DB::table('users')->insert([
            'name' => 'Josep Miquel Sala',
            'role' => 'admin',
            'email' => 'josep@monlau.com',
            'password' => Hash::make('Monlau2021'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    private function createTeacher(): void
    {
        $teacher = [
            'Carles Sanchez',
            'Carlos Araujo',

        ];

        $teachers = [];
        foreach ($teacher as $teacher) {
            $teachers[] = [
                'name' => $teacher,
                'role' => 'teacher',
                'email' => strtolower(str_replace(' ', '', $teacher)) . '@monlau.com',
                'password' => Hash::make('Monlau2021'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($teachers);
    }

    private function createStudent(): void
    {
        $student = [
            'Albert Soriano',
        ];

        $students = [];
        foreach ($student as $student) {
            $students[] = [
                'name' => $student,
                'role' => 'student',
                'email' => strtolower(str_replace(' ', '', $student)) . '@monlau.com',
                'password' => Hash::make('Monlau2021'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($students);
    }
}

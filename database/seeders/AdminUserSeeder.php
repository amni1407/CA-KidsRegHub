<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher = User::create([
            'name'     => 'teacher',
            'email'    => 'elisaester00@gmail.com',
            'password' => bcrypt('elisa123'),
        ]);

        $teacher->assignRole('teacher');

        $parent = User::create([
            'name'     => 'parent',
            'email'    => 'noramiraaaa26@gmail.com',
            'password' => bcrypt('amira123'),
        ]);

        $parent->assignRole('parent');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rishika',
            'email' => 'rishika@gmail.com',
            'password' => Hash::make('12345'),
            'phone' => '9078675645',
            'job_position' => 'laravel developer',
            'hr_passcode' => '8978',
            'age' => '23',
            'work_experience' => '1 year',
            'highest_qualification' => 'B.tech in Computer Science',
            'current_package' => '3.5 lac',
            'skills' => 'laravel, symfony, php, js, html, css, jquery, ajax',
            'file_name' => 'resume.pdf',
            'otp' => '6756',

        ]);
    }
}

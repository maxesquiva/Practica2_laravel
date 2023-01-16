<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'=> 'Anotnio',
            'telephone' => 648717372,
            'age' => 25,
            'password' => 'admin',
            'email'=> 'admiddn@gmail.com',
            'sex'=> 'male'
        ]);
        DB::table('students')->insert([
            'name'=> 'Julian',
            'telephone' => 648715572,
            'age' => 25,
            'password' => 'admin',
            'email'=> 'julian@gmail.com',
            'sex'=> 'male'
        ]);
    }
}

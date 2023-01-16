<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name'=> 'Lengua',
            'student_id' => 1,
            'professor_id' => 1,
        ]);
        DB::table('subjects')->insert([
            'name'=> 'Sociales',
            'student_id' => 1,
            'professor_id' => 2,
        ]);
        DB::table('subjects')->insert([
            'name'=> 'Naturales',
            'student_id' => 2,
            'professor_id' => 3,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            'name'=> 'Felipe',
            'telephone' => 648717352,
            'age' => 45,
            'password' => 'admin',
            'email'=> 'ElProfe@gmail.com',
            'sex'=> 'male'
        ]);
        DB::table('professors')->insert([
            'name'=> 'Julian',
            'telephone' => 648716672,
            'age' => 35,
            'password' => 'admin',
            'email'=> 'ElProfe2@gmail.com',
            'sex'=> 'male'
        ]);
        DB::table('professors')->insert([
            'name'=> 'Jesus',
            'telephone' => 648744672,
            'age' => 23,
            'password' => 'admin',
            'email'=> 'ElProfeJesus2@gmail.com',
            'sex'=> 'male'
        ]);
    }
}

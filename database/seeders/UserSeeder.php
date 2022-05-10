<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Gosset',
                'firstname' => 'Geoffrey',
                'age' => 28,
                'genre_id' => 1,
            ],
            [
                'name' => 'Bouvier',
                'firstname' => 'Bastien',
                'age' => 30,
                'genre_id' => 2,
            ],
            [
                'name' => 'Washington',
                'firstname' => 'Denzel',
                'age' => 42,
                'genre_id' => 3,
            ],
            [
                'name' => 'Johnson',
                'firstname' => 'Dwaine',
                'age' => 53,
                'genre_id' => 2,
            ],
            [
                'name' => 'Madona',
                'firstname' => 'Simone',
                'age' => 53,
                'genre_id' => 2,
            ],
            [
                'name' => 'MacGregor',
                'firstname' => 'Ewan',
                'age' => 53,
                'genre_id' => 2,
            ],
        ]);
    }
}

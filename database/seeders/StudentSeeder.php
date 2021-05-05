<?php

namespace Database\Seeders;

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
        DB::table('students')->insert(
            [
                'user_id' => 9,
            ]
        );

        DB::table('students')->insert(
            [
                'user_id' => 10,
            ]
        );
    }
}

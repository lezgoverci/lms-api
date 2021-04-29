<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert(
            [
                'name' => 'School of Agility Grit & Entrepreneurship',
                'client_id' => 1
            ]
        );

        DB::table('schools')->insert(
            [
                'name' => 'Asian Institute of Digital Transformation',
                'client_id' => 2
            ]
        );
    }
}

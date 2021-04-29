<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                'name' => 'Exponential Technology and The Digital Economy',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Customer Value Creation and The Customer Revolution',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Understanding Digitalisation and Digital Transformation',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Creating A Digital DNA Through Agile and Lean Culture',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Developing A Future-Ready Technology Architecture',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Embracing Intrapreneurial Mindset and Design Thinking',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Mastering The Art of Transformational Leadership',
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Achieving Sustainability Through A Culture of Innovation',
            ]
        );
    }
}

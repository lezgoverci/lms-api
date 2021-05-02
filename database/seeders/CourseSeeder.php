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
                'cover_photo' => '/storage/files/week1.png',
                'featured' => true,
                'schedule' => 'May 10 - May 13'
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Customer Value Creation and The Customer Revolution',
                'cover_photo' => '/storage/files/week2.png',
                'schedule' => 'May 17 - May 20'
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Understanding Digitalisation and Digital Transformation',
                'cover_photo' => '/storage/files/week3.png',
                'schedule' => 'May 24 - May 27'
            ]
        );

        DB::table('courses')->insert(
            [
                'name' => 'Developing A Future-Ready Technology Architecture',
                'cover_photo' => '/storage/files/week4.png',
                'schedule' => 'June 7 - June 10'
            ]
        );

        DB::table('courses')->insert(
            [
                'name' => 'Creating A Digital DNA Through Agile and Lean Culture',
                'cover_photo' => '/storage/files/week5.png',
                'schedule' => 'May 31 - June 3'
            ]
        );

        DB::table('courses')->insert(
            [
                'name' => 'Embracing Intrapreneurial Mindset and Design Thinking',
                'cover_photo' => '/storage/files/week6.png',
                'schedule' => 'June 14 - June 18'
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Mastering The Art of Transformational Leadership',
                'cover_photo' => '/storage/files/week7.png',
                'schedule' => 'June 21 - June 24'
            ]
        );
        DB::table('courses')->insert(
            [
                'name' => 'Achieving Sustainability Through A Culture of Innovation',
                'cover_photo' => '/storage/files/week8.png',
                'schedule' => 'June 28 - July 1'
            ]
        );
    }
}

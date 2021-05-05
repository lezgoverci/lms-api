<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert(
            [
                'course_id' => 1,
                'title' => 'Welcome To The Age of Digital Disruption',
                'number' => 1,
                'date' => '10th May 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 1,
                'title' => 'Emerging Technology Shifts To Watch Out For',
                'number' => 2,
                'date' => '13th May 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 2,
                'title' => 'Mapping The Customer Experience Journey',
                'number' => 3,
                'date' => '17th May 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 2,
                'title' => 'Digital Marketing and Social Media Analytics',
                'number' => 4,
                'date' => '20th May 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );


        DB::table('modules')->insert(
            [
                'course_id' => 3,
                'title' => 'Delivering Online Digital Solutions',
                'number' => 5,
                'date' => '24th May 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 3,
                'title' => 'Becoming Digital To The Core',
                'number' => 6,
                'date' => '27th May 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 4,
                'title' => 'Digital Upskilling and Digital DNA',
                'number' => 7,
                'date' => 'Date: 31st May 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 4,
                'title' => 'Doing Digital Versus Being Digital',
                'number' => 8,
                'date' => '3rd June 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 5,
                'title' => 'Embedding IT As A Strategic Business Driver',
                'number' => 9,
                'date' => '7th June 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 5,
                'title' => 'Managing Data Privacy and Cybersecurity',
                'number' => 10,
                'date' => '10th June 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 6,
                'title' => 'Developing The Startup Founder’s Mindset ',
                'number' => 11,
                'date' => '14th June 2021 (Monday)',
                'time' => '10:00a.m SGT to 12:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 6,
                'title' => 'Unleashing The Power of Design Thinking',
                'number' => 12,
                'date' => '18th June 2021 (Friday)',
                'time' => '10:00a.m SGT to 12:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 7,
                'title' => 'Leading Transformational Change From Within',
                'number' => 13,
                'date' => '21st June 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 7,
                'title' => 'Mastering The Four Disciplines of Execution',
                'number' => 14,
                'date' => '24th June 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 8,
                'title' => 'Decoding The Disruptive Innovation Playbook',
                'number' => 15,
                'date' => '28th June 2021 (Monday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );

        DB::table('modules')->insert(
            [
                'course_id' => 8,
                'title' => 'Unleashing Open Innovation For Sustainable Growth',
                'number' => 16,
                'date' => '1st July 2021 (Thursday)',
                'time' => '5:00p.m SGT to 7:00p.m SGT'
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseFacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 1,
                'course_id' => 1,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 2,
                'course_id' => 2,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 3,
                'course_id' => 3,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 4,
                'course_id' => 4,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 5,
                'course_id' => 5,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 6,
                'course_id' => 6,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 7,
                'course_id' => 7,
            ]
        );
        DB::table('course_faculty')->insert(
            [
                'faculty_id' => 8,
                'course_id' => 8,
            ]
        );
    }
}

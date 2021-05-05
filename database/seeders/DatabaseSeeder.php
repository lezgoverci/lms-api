<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Material;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            ClientSeeder::class,
            SchoolSeeder::class,
            CourseSeeder::class,
            FacultySeeder::class,
            ModuleSeeder::class,
            TaskSeeder::class,
            //FileSeeder::class,
            CourseFacultySeeder::class,
            MaterialSeeder::class
        ]);
    }
}

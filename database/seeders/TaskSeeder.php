<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '12 May 2021 (Wednesday)',
                'module_id' => 1
            ]
        );

        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '12 May 2021 (Wednesday)',
                'module_id' => 2
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '19 May 2021 (Wednesday)',
                'module_id' => 3
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '19 May 2021 (Wednesday)',
                'module_id' => 4
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '26 May 2021 (Wednesday)',
                'module_id' => 5
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '26 May 2021 (Wednesday)',
                'module_id' => 6
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '2 June 2021 (Wednesday)',
                'module_id' => 7
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '2 June 2021 (Wednesday)',
                'module_id' => 8
            ]
        );

        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '9 June 2021 (Wednesday)',
                'module_id' => 9
            ]
        );

        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '9 June 2021 (Wednesday)',
                'module_id' => 10
            ]
        );

        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '16 June 2021 (Wednesday)',
                'module_id' => 11
            ]
        );

        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '16 June 2021 (Wednesday)',
                'module_id' => 12
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '23 June 2021 (Wednesday)',
                'module_id' => 13
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '23 June 2021 (Wednesday)',
                'module_id' => 14
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '30 June 2021 (Wednesday)',
                'module_id' => 15
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Title goes here',
                'description' => 'Description goes here',
                'deadline' => '30 June 2021 (Wednesday)',
                'module_id' => 16
            ]
        );

    }
}

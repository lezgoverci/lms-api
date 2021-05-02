<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%201.pptx',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%202.pptx',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%203.pptx',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%204.pptx',
                'task_id' => 1

            ]
        );
    }
}

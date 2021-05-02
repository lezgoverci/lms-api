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
                'path' => '/storage/files/week1/DAVID%20HARDOON%20(1)%20AIDT%20Wk1%20Pre-Reading%20No.%201.pdf',
                'filename' => 'DAVID HARDOON (1) AIDT Wk1 Pre-Reading No. 1.pdf',
                'filetype' => 'PDF',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/week1/DAVID%20HARDOON%20(2)%20AIDT%20Wk1%20Pre-Reading No.%202.pdf',
                'filename' => 'DAVID HARDOON (2) AIDT Wk1 Pre-Reading No. 2.pdf',
                'filetype' => 'PDF',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/week1/DAVID%20HARDOON%20(3)%20AIDT%20Wk1%20Pre-Reading%20No.%203.pdf',
                'filename' => 'DAVID HARDOON (3) AIDT Wk1 Pre-Reading No. 3.pdf',
                'filetype' => 'PDF',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/week1/DAVID%20HARDOON%20(4)%20AIDT%20Wk1%20Pre-Reading%20No.%204.pdf',
                'filename' => 'DAVID HARDOON (4) AIDT Wk1 Pre-Reading No. 4.pdf',
                'filetype' => 'PDF',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/week1/DAVID HARDOON%20(5)%20AIDT%20Wk1%20Case%20Study%20Analysis%20Report.pdf',
                'filename' => 'DAVID HARDOON (5) AIDT Wk1 Case Study Analysis Report.pdf',
                'filetype' => 'PDF',
                'task_id' => 1

            ]
        );
        DB::table('materials')->insert(
            [
                'path' => '/storage/files/week1/DAVID HARDOON%20(6)%20AIDT%20Wk1%20Workplace%20Project%20Assignment%20.pptx',
                'filename' => 'DAVID HARDOON (6) AIDT Wk1 Workplace Project Assignment .pptx',
                'filetype' => 'PPTX',
                'task_id' => 1

            ]
        );
    }
}

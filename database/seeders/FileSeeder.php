<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%201.pptx',
            ]
        );
        DB::table('files')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%202.pptx',
            ]
        );
        DB::table('files')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%203.pptx',
            ]
        );
        DB::table('files')->insert(
            [
                'path' => '/storage/files/DAVID%20Hardoon%20AIDT%20Wk1%20Pre-Reading%20No.%204.pptx',
            ]
        );
    }
}

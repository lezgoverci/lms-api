<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert(
            [
                'user_id' => 1,
                'linkedin' => 'https://www.linkedin.com/in/davidrh/',
                'company' => 'UnionBank of the Philippines',
                'position' => 'Senior Advisor For Data and Artificial Intelligence',
                'tagline' => 'World Leading Expert In Data Science and Artificial Intelligence',
                'field' => 'Data Science and Artificial Intelligence',
                'photo' => '/storage/files/hardoon.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 2,
                'linkedin' => 'https://www.linkedin.com/in/donald-lim-b359b52/',
                'company' => 'Udenna Corporation',
                'position' => 'CIO',
                'tagline' => '2014 Agora Awardee In Marketing Communications & 2015 TOYM Awardee for Digital Media',
                'field' => 'Digital Media and Social Media Marketing',
                'photo' => '/storage/files/lim.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 3,
                'linkedin' => 'https://www.linkedin.com/in/edwin-bautista-11355634/',
                'company' => 'UnionBank of the Philippines',
                'position' => 'President & CEO',
                'tagline' => '2018 Best Banking CEO In Asia, 2020 Asia Pacific Digital Banker & Master Innovator In DX Innovation',
                'field' => 'Digital Banking and Digital Transformation',
                'photo' => '/storage/files/bautista.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 4,

                'linkedin' => 'https://www.linkedin.com/in/henryaguda/',
                'company' => 'UBx',
                'position' => 'Chairman of the Board',
                'tagline' => '2010 ASEAN CIO In Government & 2020 Top 10 Transformational Leaders in Southeast Asia',
                'field' => 'Advanced Management Program, Harvard Business School',
                'photo' => '/storage/files/aguda.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 5,

                'linkedin' => 'https://www.linkedin.com/in/robynewilson/',
                'company' => 'Praxis Management',
                'position' => 'Founder & CEO',
                'tagline' => 'Asian Expert In Strategic Change Management and Agile Culture Leadership',
                'field' => 'Digital DNA and Agile Culture Development',
                'photo' => '/storage/files/wilson.png'
            ]
        );



        DB::table('faculties')->insert(
            [
                'user_id' => 6,

                'linkedin' => 'https://www.linkedin.com/in/daveblakely/',
                'company' => 'Mach49',
                'position' => 'SVP',
                'tagline' => 'World Leading Expert in Design Thinking and Innovation With 6 Registered US Patents',
                'field' => 'Intrapreneurial Mindset and Design Thinking',
                'photo' => '/storage/files/blakely.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 7,

                'linkedin' => 'https://www.linkedin.com/in/rinaneoh/',
                'company' => 'FICUS Venture Capital',
                'position' => 'Managing Director',
                'tagline' => '2017 Top 10 Most Inspiring Businesswomen In Singapore & 2018 APAC Entrepreneurial Award',
                'field' => 'Transformational Leadership and Discipline of Execution',
                'photo' => '/storage/files/neoh.png'
            ]
        );

        DB::table('faculties')->insert(
            [
                'user_id' => 8,

                'linkedin' => 'https://www.linkedin.com/in/anna-maj-fintech/',
                'company' => 'Truffle Capital',
                'position' => 'Senior Advisor',
                'tagline' => '2019 Top 25 Women Leaders in Financial Technology & 2020 Top 10 Women In Fintech',
                'field' => 'Open Banking, Platforms and Open Innovation',
                'photo' => '/storage/files/maj.png'
            ]
        );
    }
}

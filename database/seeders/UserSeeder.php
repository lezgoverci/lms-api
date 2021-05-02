<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'firstName' => 'David',
                'lastName' => 'Hardoon',
                'email' => 'drhardoon@unionbankph.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Donald',
                'lastName' => 'Lim',
                'email' => 'donaldpatricklim@gmail.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Edwin',
                'lastName' => 'Bautista',
                'email' => 'edwinb@unionbankph.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Henry',
                'lastName' => 'Aguda',
                'email' => 'hrraguda@unionbankph.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Robyn',
                'lastName' => 'Wilson',
                'email' => 'robyn@praxismanagementconsulting.com',
                'password' => Hash::make('password')
            ]
        );

        DB::table('users')->insert(
            [
                'firstName' => 'Dave',
                'lastName' => 'Blakely',
                'email' => 'dave@mach49.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Rina',
                'lastName' => 'Neoh',
                'email' => 'rinaneoh@gmail.com',
                'password' => Hash::make('password')
            ]
        );
        DB::table('users')->insert(
            [
                'firstName' => 'Anna',
                'lastName' => 'Maj',
                'email' => 'anna.maj@creativelink.pl',
                'password' => Hash::make('password')
            ]
        );
    }
}

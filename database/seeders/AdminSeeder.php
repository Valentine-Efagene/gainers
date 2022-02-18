<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Ghost',
            'email' => 'ghost@gmail.com',
            'password' => Hash::make('power'),
            'phone_number' => '+45454343576',
            'country' => 'UK',
            'gender' => 'Male',
            'username' => 'Ghost',
        ]);
        DB::table('admins')->insert([
            'name' => 'Skipper',
            'email' => 'skipper@gmail.com',
            'password' => Hash::make('power'),
            'phone_number' => '+45454343576',
            'country' => 'UK',
            'gender' => 'Male',
            'username' => 'Skipper',
        ]);
    }
}

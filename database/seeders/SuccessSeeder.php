<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('successes')->insert([
            'success_rate' => 70,
            'date' => Carbon::createFromFormat('d-m-Y', '01-01-2022')
        ]);
        DB::table('successes')->insert([
            'success_rate' => 78,
            'date' => Carbon::createFromFormat('d-m-Y', '01-02-2022')
        ]);
        DB::table('successes')->insert([
            'success_rate' => 85,
            'date' => Carbon::createFromFormat('d-m-Y', '01-03-2022')
        ]);
        DB::table('successes')->insert([
            'success_rate' => 80,
            'date' => Carbon::createFromFormat('d-m-Y', '01-04-2022')
        ]);
        DB::table('successes')->insert([
            'success_rate' => 92,
            'date' => Carbon::createFromFormat('d-m-Y', '01-05-2022')
        ]);
        DB::table('successes')->insert([
            'success_rate' => 94,
            'date' => Carbon::createFromFormat('d-m-Y', '01-06-2022')
        ]);
    }
}

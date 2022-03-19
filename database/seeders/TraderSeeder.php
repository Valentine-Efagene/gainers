<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traders')->insert([
            'name' => 'Frank Baum',
            'roi' => 80,
            'success_rate' => 90
        ]);
        DB::table('traders')->insert([
            'name' => 'Susanne Bones',
            'roi' => 80,
            'success_rate' => 90
        ]);
        DB::table('traders')->insert([
            'name' => 'Kim Suu',
            'roi' => 80,
            'success_rate' => 90
        ]);
        DB::table('traders')->insert([
            'name' => 'Nathan Lee',
            'roi' => 80,
            'success_rate' => 90
        ]);
    }
}

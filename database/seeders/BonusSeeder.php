<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bonuses')->insert([
            'user_id' => '1029543',
            'description' => 'Signup Bonus',
            'amount' => 5
        ]);
        DB::table('bonuses')->insert([
            'user_id' => '1029543',
            'description' => 'Referral bonus',
            'amount' => 5
        ]);
    }
}

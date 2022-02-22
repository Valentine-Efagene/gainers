<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WithdrawalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('withdrawals')->insert([
            'amount' => 500,
            'token' => '4r3io4ro3i4jr',
            'wallet_id' => '43j4394irf39',
            'wallet_qpr' => 'mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1',
        ]);
        DB::table('withdrawals')->insert([
            'amount' => 300,
            'token' => '4r3io4ro3i4jr',
            'wallet_id' => '43j4394irf39',
            'wallet_qpr' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1',
        ]);
        DB::table('withdrawals')->insert([
            'amount' => 100,
            'token' => '4r3io4ro3i4jr',
            'wallet_id' => '43j4394irf39',
            'wallet_qpr' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1',
        ]);
    }
}

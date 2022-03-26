<?php

namespace Database\Seeders;

use App\Models\Deposit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deposits')->insert([
            'amount' => 500,
            'plan' => Deposit::DIAMOND,
            'proof' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1029543',
        ]);
        DB::table('deposits')->insert([
            'amount' => 600,
            'plan' => Deposit::DIAMOND,
            'proof' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1029543',
        ]);
        DB::table('deposits')->insert([
            'amount' => 400,
            'plan' => Deposit::DIAMOND,
            'proof' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'user_id' => '1029543',
        ]);
    }
}

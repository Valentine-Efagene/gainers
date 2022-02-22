<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            'bitcoin_wallet_id' => 100,
            'bitcoin_wallet_qpr_code' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'bnb_wallet_id' => '43j4394irf39',
            'bnb_wallet_qpr_code' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
        ]);
    }
}

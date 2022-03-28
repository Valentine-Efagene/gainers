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
            'name' => 'bitcoin',
            'address' => '43j4394irf39',
            'qr_code' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'acronym' => 'BTC',
        ]);

        DB::table('wallets')->insert([
            'name' => 'binance',
            'address' => 'knvksnlvknlweknwev3n',
            'qr_code' => 'uploads/mgPPOelvZW1FRZar28XYkVuWjs5Bcgy9INJkzTCp.png',
            'acronym' => 'BNB',
        ]);
    }
}

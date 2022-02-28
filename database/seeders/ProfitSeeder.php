<?php

namespace Database\Seeders;

use App\Models\Profit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profits')->insert([
            'deposit_id' => '1',
            'profit_description' => 'Bitcoin appreciated',
            'profit_amount' => 50,
            'bonus_description' => 'We value your continued patronage',
            'bonus_amount' => 10,
        ]);
        DB::table('profits')->insert([
            'deposit_id' => '2',
            'profit_description' => 'Bitcoin appreciated',
            'profit_amount' => 5
        ]);

        //Profit::factory(10)->create();
    }
}

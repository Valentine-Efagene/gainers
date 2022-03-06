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
            'description' => 'Bitcoin appreciated',
            'amount' => 50
        ]);
        DB::table('profits')->insert([
            'deposit_id' => '2',
            'description' => 'Bitcoin appreciated',
            'amount' => 5
        ]);

        //Profit::factory(10)->create();
    }
}

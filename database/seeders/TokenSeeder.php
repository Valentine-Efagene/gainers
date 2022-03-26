<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokens')->insert([
            'user_id' => '1029543',
            'token' => 'i4jo3j43j4ojoni',
        ]);
    }
}

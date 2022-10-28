<?php

namespace Database\Seeders;

use App\Models\FakeTransaction;
use Illuminate\Database\Seeder;

class FakeTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FakeTransaction::factory()
            ->count(50)
            ->create();
    }
}

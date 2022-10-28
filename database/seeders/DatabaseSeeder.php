<?php

namespace Database\Seeders;

use App\Models\FakeTransaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            DepositSeeder::class,
            // WithdrawalSeeder::class,
            WalletSeeder::class,
            ProfitSeeder::class,
            TokenSeeder::class,
            BonusSeeder::class,
            TraderSeeder::class,
            SuccessSeeder::class,
            FakeTransactionSeeder::class
        ]);
    }
}

<?php
// php artisan db:seed --class=UserSeeder
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'password' => Hash::make('letslove'),
            'phone_number' => '+45454656576',
            'country' => 'UK',
            'gender' => 'Female',
            'username' => 'Jane',
        ]);
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('letslove'),
            'phone_number' => '+45454343576',
            'country' => 'UK',
            'gender' => 'Male',
            'username' => 'John',
            'referrer' => '1',
        ]);

        // password: secret
        \App\Models\User::factory(10)->create();
    }
}

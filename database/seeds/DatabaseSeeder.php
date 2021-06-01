<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Artic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'cfarinez@vmc.com',
            'password' => Hash::make('money')
        ]);

        factory(Artic::class, 5)->create();
    }
}

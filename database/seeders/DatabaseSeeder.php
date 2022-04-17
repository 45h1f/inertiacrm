<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::factory()->create([
            'first_name' => 'Ashiful',
            'last_name' => 'Islam',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            'owner' => true,
        ]);
    }
}

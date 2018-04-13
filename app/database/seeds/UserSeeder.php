<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Darmawan Zulkifli',
            'email' => 'clouds@gmail.com',
            'password' => bcrypt('parkour88'),
        ]);
    }
}

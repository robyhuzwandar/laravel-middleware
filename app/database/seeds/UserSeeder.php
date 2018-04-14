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
            'name' => 'Roby Huzwandar',
            'email' => 'robyhuzwandar@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

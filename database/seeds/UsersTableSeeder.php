<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'login_name' => 'admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'remember_token'=>str_random(10),
        ]);

        User::create([
            'login_name' => 'system',
            'email'=>'system@gmail.com',
            'password' => bcrypt('11111111'),
            'remember_token'=>str_random(10),
        ]);
    }
}

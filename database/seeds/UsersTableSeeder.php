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
          User::insert([
            'name' => 'Owner',
            'username' => 'Owner',
            'role_id'=>'1',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
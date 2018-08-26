<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
        	[
	            'name' => 'Admin',
	            'key' => 'admin',
	        ],
        	[
	            'name' => 'user',
	            'key' => 'user',
        	]
        ]);
    }
}

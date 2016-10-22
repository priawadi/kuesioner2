<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	[
        		'name' => 'admin',
        		'display_name' => 'Administrator',
        		'description' => 'Superuser'
        	],
        	[
        		'name' => 'enumerator',
        		'display_name' => 'Enumerator',
        		'description' => 'Enumerator'
        	]
        ];

        foreach ($roles as $key => $value) {
        	Role::create($value);
        }
    }
}

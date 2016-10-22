<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            // Role
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
            // User
        	[
        		'name' => 'user-list',
        		'display_name' => 'Display User Listing',
        		'description' => 'See only Listing Of User'
        	],
        	[
        		'name' => 'user-create',
        		'display_name' => 'Create User',
        		'description' => 'Create New User'
        	],
        	[
        		'name' => 'user-edit',
        		'display_name' => 'Edit User',
        		'description' => 'Edit User'
        	],
        	[
        		'name' => 'user-delete',
        		'display_name' => 'Delete User',
        		'description' => 'Delete User'
        	],
            // Kuesioner
            [
                'name' => 'kuesioner-list',
                'display_name' => 'Display Kuesioner Listing',
                'description' => 'See only Listing Of Kuesioner'
            ],
            [
                'name' => 'kuesioner-create',
                'display_name' => 'Create Kuesioner',
                'description' => 'Create New Kuesioner'
            ],
            [
                'name' => 'kuesioner-edit',
                'display_name' => 'Edit Kuesioner',
                'description' => 'Edit Kuesioner'
            ],
            [
                'name' => 'kuesioner-delete',
                'display_name' => 'Delete Kuesioner',
                'description' => 'Delete Kuesioner'
            ],
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}

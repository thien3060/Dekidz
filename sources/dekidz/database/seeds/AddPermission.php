<?php

use Illuminate\Database\Seeder;
use Pingpong\Trusty\Role;
use Pingpong\Trusty\Permission;

class AddPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = array(
            'Manage Students',
            'Manage Classes',
            'Manage Finances',
            'Manage Repository',
            'Manage Nutrition',
            'Manage Education',
            'Manage Staffs',
            'Access Admin',
            'Call Videos'
        );

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'slug' => $permission,
                'description' => $permission,
            ]);
        }

        $permissions = Permission::lists('id')->toArray();

        Role::find(1)->permissions()->attach($permissions);
    }
}

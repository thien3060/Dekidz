<?php

use Illuminate\Database\Seeder;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Pingpong\Trusty\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',  // MUST USE admin, DO NOT CHANGE!
            'description' => 'The one who manage the site',
            'created_at' => new \Carbon\Carbon(),
            'updated_at' => new \Carbon\Carbon(),
        ]);

        $user = Pingpong\Admin\Entities\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => 'admin123',
            'created_at' => new \Carbon\Carbon(),
            'updated_at' => new \Carbon\Carbon(),
        ]);

        $user->roles()->attach($role);
    }
}

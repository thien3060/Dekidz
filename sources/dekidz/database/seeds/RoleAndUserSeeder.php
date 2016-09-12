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
        $role = Pingpong\Trusty\Role::where('slug', '=', 'admin')->first();

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

<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //create a user
        $newUser = User::create([
            'is_visible' => false,
            'is_active' => true,
            'user_code' => 'ADMIN',
            'epf_code' => '0',
            'name_first' => 'admin',
            'name_last' => 'admin',
            'password' => Hash::make('password')
        ]);
        //search a role
        $devRole = Role::where('slug','super-user')->first();
        //search a permission
        $devPermission = Permission::where('slug','show-event')->first();
        //add role and permission
        $newUser->roles()->attach($devRole);
        $newUser->permissions()->attach($devPermission);
    }
}

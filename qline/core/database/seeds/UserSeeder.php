<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\Permission;
use App\UserAPIToken;

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
            'user_code' => '0ADMIN',
            'epf_code' => '0ADMIN',
            'name_first' => 'admin',
            'name_last' => 'admin',
            'password' => Hash::make('password')
        ]);
        //search a role
        $newRole = Role::where('slug','super-user')->first();
        //search a permission
        $newPermission = Permission::where('slug','show-event')->first();
        //add role and permission
        //$newUser->roles()->attach( array( $newRole->id ) );// add to intermediate model
        //$newUser->roles()->detach( array( $newRole->id ) );// remove from intermediate model
        //$newUser->roles()->sync( array( $newRole->id ) );// add or remove from intermediate model
        //$newUser->permissions()->attach( array( $newPermission->id ) );// add to intermediate model
        //$newUser->permissions()->detach( array( $newPermission->id ) );// remove from intermediate model
        //$newUser->permissions()->sync( array( $newPermission->id ) );// add or remove from intermediate model
        $newUser->roles()->attach( $newRole );
        $newUser->permissions()->attach( $newPermission );
        //add token
        $newUserAPIToken = $newUser->userAPITokens()->create( array( 
            'is_visible' => false,
            'is_active' => true,
            'is_deactivatable' => false,
            'is_notifiable' => false,
            'user_id' => $newUser->user_code
        ) );
        //$newUser->userAPITokens()->save( array( $newUserAPIToken ) );// add or edit related model
        //$newUserAPIToken->user()->associate( $newUser )->save();// edit related model relation
    }
}

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
        $newUser = User::firstOrCreate([
            'is_visible' => false,
            'is_active' => true,
            'code' => '0admin',
            'code_epf' => '0admin',
            'name_first' => 'admin',
            'name_last' => 'admin',
            'password' => Hash::make('password')
        ]);
        
        $newRole = $newUser->roles()->firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        
        $newUser->roles()->attach($newRole);
        
        $newPermission = $newUser->permissions()->firstOrCreate([
            'slug' => 'show-event',
            'name' => 'Show Event'
        ]);
        
        $newUser->permissions()->attach($newPermission);
        
        $newUserAPIToken = $newUser->userAPITokens()->firstOrCreate([
            'is_visible' => false,
            'is_active' => true,
            'is_deactivatable' => false,
            'is_notifiable' => false
        ]);
        
        $newUser->userAPITokens()->save($newUserAPIToken);
    }
}

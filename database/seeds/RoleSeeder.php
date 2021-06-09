<?php

use App\Role;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $admin = new Role();
        $admin->role_uuid = Uuid::generate(4)->string;
        $admin->name = 'admin';
        $admin->save();

        $user = new Role();
        $user->role_uuid = Uuid::generate(4)->string;
        $user->name = 'user';
        $user->save();
    }
}

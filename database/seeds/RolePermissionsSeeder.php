<?php

use App\Permission;
use App\Role;
use App\RolePermissions;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles  = Role::all();
        $admin  = $roles->where('name','admin')->first();
        $user   = $roles->where('name','user')->first();

        $permissions = Permission::all();
        $user_permissions = [
            'UserListC','UserListR','UserListU',
            'CommonPageListCRUD','CommonPageListC','CommonPageListR','CommonPageListU','CommonPageListD',
        ];
        
        foreach ($permissions as $permission) {
            $new_role_perm = new RolePermissions();
            $new_role_perm->role_permissions_uuid   = Uuid::generate(4)->string;
            $new_role_perm->role_uuid               = $admin->role_uuid;
            $new_role_perm->permission_uuid         = $permission->permission_uuid;
            $new_role_perm->save();

            if (in_array($permission->name, $user_permissions)) {
                $new_role_perm_user = new RolePermissions();
                $new_role_perm_user->role_permissions_uuid   = Uuid::generate(4)->string;
                $new_role_perm_user->role_uuid               = $user->role_uuid;
                $new_role_perm_user->permission_uuid         = $permission->permission_uuid;
                $new_role_perm_user->save();
            }
        }
    }
}

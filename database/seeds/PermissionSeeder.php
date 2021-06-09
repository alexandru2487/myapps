<?php

use App\Permission;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $permissions = [
            'UserListCRUD','UserListC','UserListR','UserListU','UserListD',
            'RoleListCRUD','RoleListC','RoleListR','RoleListU','RoleListD',
            'PermissionListCRUD','PermissionListC','PermissionListR','PermissionListU','PermissionListD',
            'RolePermissionListCRUD','RolePermissionListC','RolePermissionListR','RolePermissionListU','RolePermissionListD',
            'UserRoleListCRUD','UserRoleListC','UserRoleListR','UserRoleListU','UserRoleListD',
            'CommonPageListCRUD','CommonPageListC','CommonPageListR','CommonPageListU','CommonPageListD',
        ];
        foreach ($permissions as $permissison) {
            $perm = new Permission();
            $perm->permission_uuid = Uuid::generate(4)->string;
            $perm->name = $permissison;
            $perm->save();
        }
    }
}

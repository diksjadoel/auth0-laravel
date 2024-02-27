<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoleHasPermission;
class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleHasPermission::create([
            'rles_has_permissions_usrs_permissions_id'=>5,
            'rles_has_permissions_usrs_roles_id'=>1
        ]);
    }
}

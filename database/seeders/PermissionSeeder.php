<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
                'prms_title'=>'crud',
                'prms_slug'=>'crud'
        ]);
        Permission::create([
                'prms_title'=>'Delete',
                'prms_slug'=>'delete'
         ]);
        Permission::create([
                'prms_title'=>'Read',
                'prms_slug'=>'read'
        ]);
        Permission::create([
                'prms_title'=>'Update',
                'prms_slug'=>'update'
        ]);
    }
}

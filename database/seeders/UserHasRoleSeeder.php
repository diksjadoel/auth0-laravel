<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserHasRole;
class UserHasRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserHasRole::create([
                'user_has_roles_usrs_rles_id' => 1,
                'user_has_roles_usrs_id' => 1
        ]);
    }
}

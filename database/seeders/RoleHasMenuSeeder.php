<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoleHasMenu;
class RoleHasMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleHasMenu::create([
            'rles_has_menus_usrs_rles_id'=>1,
            'rles_has_menus_usrs_menu_id'=>5
         ]);
         RoleHasMenu::create([
            'rles_has_menus_usrs_rles_id'=>1,
            'rles_has_menus_usrs_menu_id'=>6
         ]);
    }
}

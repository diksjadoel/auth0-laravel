<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserMenu;
class UserMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserMenu::create([
            'usrs_menu_title'=>'Dashboard'
        ]);
        UserMenu::create([
            'usrs_menu_title'=>'Products'
        ]);
        UserMenu::create([
            'usrs_menu_title'=>'Categories'
        ]);
        UserMenu::create([
            'usrs_menu_title'=>'Role Management'
        ]);
        UserMenu::create([
            'usrs_menu_title'=>'Menu Management'
        ]);
        UserMenu::create([
            'usrs_menu_title'=>'Settings'
        ]);
    }
}

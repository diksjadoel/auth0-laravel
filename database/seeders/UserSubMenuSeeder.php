<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserSubMenu;
class UserSubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'Home',
            'usrs_sub_menu_url'=>'home',
            'usrs_sub_menu_sort'=>'A',
            'usrs_sub_menu_usrs_menu_id'=>'1'
        ]);
           UserSubMenu::create([
            'usrs_sub_menu_title'=>'Products Management',
            'usrs_sub_menu_url'=>'products',
            'usrs_sub_menu_sort'=>'B',
            'usrs_sub_menu_usrs_menu_id'=>'2'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'Data Roles',
            'usrs_sub_menu_url'=>'dataroles',
            'usrs_sub_menu_sort'=>'C',
            'usrs_sub_menu_usrs_menu_id'=>'4'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'Edit Roles',
            'usrs_sub_menu_url'=>'roles/edit',
            'usrs_sub_menu_sort'=>'C',
            'usrs_sub_menu_usrs_menu_id'=>'4'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'User Menu',
            'usrs_sub_menu_url'=>'datamenu',
            'usrs_sub_menu_sort'=>'D',
            'usrs_sub_menu_usrs_menu_id'=>'5'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'Edit User Menu',
            'usrs_sub_menu_url'=>'edit/data/menu',
            'usrs_sub_menu_sort'=>'D',
            'usrs_sub_menu_usrs_menu_id'=>'5'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'User Sub Menu',
            'usrs_sub_menu_url'=>'datasubmenu',
            'usrs_sub_menu_sort'=>'E',
            'usrs_sub_menu_usrs_menu_id'=>'5'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'User Sub Menu',
            'usrs_sub_menu_url'=>'edit/data/submenu',
            'usrs_sub_menu_sort'=>'E',
            'usrs_sub_menu_usrs_menu_id'=>'5'
        ]);
        UserSubMenu::create([
            'usrs_sub_menu_title'=>'Settings',
            'usrs_sub_menu_url'=>'settings',
            'usrs_sub_menu_sort'=>'F',
            'usrs_sub_menu_usrs_menu_id'=>'6'
        ]);
    }
}

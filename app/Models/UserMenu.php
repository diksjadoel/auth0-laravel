<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserSubMenu;
use App\Models\RoleHasMenu;
class UserMenu extends Model
{
    use HasFactory;

    protected $primaryKey = 'usrs_menu_id';

    protected $fillable = [
        'usrs_menu_title'
    ];

    public function UserSubMenu() {
        return $this->hasMany(UserSubMenu::class,'usrs_sub_menu_usrs_menu_id');
    }

    public function usermenuroles() {
        return $this->hasMany(RoleHasMenu::class,'rles_has_menus_usrs_menu_id');
    }
}

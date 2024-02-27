<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserMenu;
class UserSubMenu extends Model
{
    use HasFactory;
    protected $primaryKey = 'usrs_sub_menu_id';

    protected $fillable = [
        'usrs_sub_menu_title',
        'usrs_sub_menu_url',
        'usrs_sub_menu_icon',
        'usrs_sub_menu_sort',
        'usrs_sub_menu_usrs_menu_id'
    ];

    public function UserSubMenus() {
        return $this->belongsTo(UserMenu::class,'usrs_sub_menu_usrs_menu_id');
    }
}

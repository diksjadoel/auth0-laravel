<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRole;
use App\Models\UserMenu;
class RoleHasMenu extends Model
{
    use HasFactory;

    protected $primaryKey = 'rles_has_menus_id';

    protected $fillable = [
        'rles_has_menus_usrs_rles_id',
        'rles_has_menus_usrs_menu_id'
    ];

    public function rolehasmenus() {
        return $this->belongsTo(UserRole::class,'rles_has_menus_usrs_rles_id');
    }

    public function usermenurole() {
        return $this->belongsTo(UserMenu::class,'rles_has_menus_usrs_menu_id');
    }
}

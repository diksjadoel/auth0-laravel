<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoleHasPermission;
use App\Models\RoleHasMenu;
use App\Models\UserHasRole;
class UserRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'usrs_rles_id';

    protected $fillable = [
        'usrs_rles_title'
    ];

    public function userrole() {
        return $this->hasMany(RoleHasPermission::class,'rles_has_permissions_usrs_roles_id');
    }
    public function userhasrole() {
        return $this->hasMany(UserHasRole::class,'user_has_roles_usrs_rles_id');
    }
    public function rolehasmenu() {
        return $this->hasMany(RoleHasMenu::class,'rles_has_menus_usrs_rles_id');
    }
}

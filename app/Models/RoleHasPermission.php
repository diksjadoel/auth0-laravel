<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\permission;
class RoleHasPermission extends Model
{
    use HasFactory;

    protected $primaryKey = 'rles_has_permissions_id';

    protected $fillable = [
        'rles_has_permissions_usrs_permissions_id',
        'rles_has_permissions_usrs_roles_id'
    ];

    public function rolepermissions() {
        return $this->belongsTo(Permission::class,'rles_has_permissions_usrs_permissions_id');
    }
    public function userroles() {
        return $this->belongsTo(UserRole::class,'rles_has_permissions_usrs_roles_id');
    }
}

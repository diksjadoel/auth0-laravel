<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoleHasPermission;
class Permission extends Model
{
    use HasFactory;

    protected $primaryKey = 'prms_id';

    protected $fillable = [
        'prms_title',
        'prms_slug'
    ];

    public function rolepermission() {
        return $this->hasMany(RoleHasPermission::class,'rles_has_permissions_usrs_permissions_id');
    }
}

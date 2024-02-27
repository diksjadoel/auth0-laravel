<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRole;
class UserHasRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_has_roles_id';

    protected $fillable = [
        'user_has_roles_usrs_rles_id',
        'user_has_roles_usrs_id'
    ];

    public function userroles() {
        return $this->belongsTo(UserRole::class,'user_has_roles_usrs_rles_id');
    }

    public function roleusers() {
        return $this->belongsTo(User::class,'user_has_roles_usrs_id');
    }
}

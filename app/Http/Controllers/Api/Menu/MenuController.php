<?php

namespace App\Http\Controllers\Api\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserHasRole;
class MenuController extends Controller
{
    public function userGetMenus() {
        $usermenu = UserHasRole::with(['userroles.userrole.rolepermissions.rolepermission.userroles.rolehasmenu.usermenurole.UserSubMenu'])->get();
        return response()->json(['data'=>$usermenu]);
    }
}

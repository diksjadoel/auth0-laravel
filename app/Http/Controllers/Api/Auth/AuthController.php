<?php
namespace App\Http\Controllers\Api\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\Models\RoleHasPermission;
class AuthController extends Controller
{
    public function authLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $credentials = $request->only('email', 'password');
        if(!$token = auth()->guard('api_admin')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect'
            ], 401);
        }
        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api_admin')->user(),
            'token'   => $token
        ], 201);
    }
    public function getUser() {
        return response()->json([
            'user'=>auth()->guard('api_admin')->user()
        ]);
    }
    public function getMenus() {
        return response()->json([
            'permissions_name'=>RoleHasPermission::all()
        ]);
    }
}

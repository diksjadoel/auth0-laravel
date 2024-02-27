<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Menu\MenuController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login',[AuthController::class,'authLogin']);
Route::get('auth/user',[AuthController::class,'getUser'])->middleware(['auth:api_admin']);
Route::get('get/sidebar',[MenuController::class,'userGetMenus']);
Route::get('auth/getmenus',[AuthController::class,'getMenus']);

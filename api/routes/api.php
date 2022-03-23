<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    AuthorController,
    AuthController,
    AdminController
};

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


Route::apiResource('posts',PostController::class)->middleware(['auth:users','admin']);
Route::apiResource('authors',AuthorController::class)->middleware('auth:users');
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::get('logout',[AuthController::class,'logout']);
Route::post('adminRegister',[AdminController::class,'register']);
Route::post('adminLogin',[AdminController::class,'login']);
Route::get('adminLogout',[AdminController::class,'logout']);
Route::get('header_token', function() {
    return response()->json(['status' =>2, 'msg' => 'Unathorized']);
  })->name('header_token');

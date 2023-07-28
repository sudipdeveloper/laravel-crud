<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users/getall",[UserController::class,'getAllUserData']);
Route::get("/users/get/{id}",[UserController::class,'getByUserId']);
Route::post("/users/add",[UserController::class,'addUser']);
Route::post("/users/update",[UserController::class,'updateUser']);
Route::post("/users/delete/{id}",[UserController::class,'deleteUser']);
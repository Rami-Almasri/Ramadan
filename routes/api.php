<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\TasbihController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('signup',  'signup');
    Route::post('login',  'login');
    Route::post('logout',  'logout');
});
Route::middleware('auth:sanctum')->prefix('categories')->controller(CategoryController::class)->group(function () {
    Route::get("/index", 'index');
    Route::post("/store", 'store');
    Route::get("/show/{category}");
    Route::post('/update/{category}', 'update');
    Route::delete('/destroy/{category}', 'destroy');
});

Route::middleware('auth:sanctum')->prefix('tasbihs')->controller(TasbihController::class)->group(function () {
    Route::get("/index", 'index');
    Route::post("/store", 'store');
    Route::get("/show/{tasbih}", ' show');
    Route::post('/update/{tasbih}', 'update');
    Route::delete('/destroy/{tasbih}', 'destroy');
});

Route::middleware('auth:sanctum')->prefix('duas')->controller(DuaController::class)->group(function () {
    Route::get('/index', 'index');
    Route::post('/store', 'store');
    Route::get('/show/{dua}', 'show');
    Route::post('/update/{dua}', 'update');
    Route::delete('/destroy/{dua}', 'destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;


// 顯示登入頁面
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// 處理登入請求
Route::post('/login', [LoginController::class, 'login']);
// 登出
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 登入後才能進入的後台首頁範例
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('users.index');
    // 處理新增使用者的 POST 請求
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    // 更新使用者資料的路由
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    // 新增刪除使用者的路由
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
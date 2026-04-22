<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'reset'])->name('password.reset');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::resource('news', AdminNewsController::class);
        Route::resource('category', CategoryController::class);

    });

Route::get('/test', function () {
    return 'Admin route works!';
});

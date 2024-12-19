<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/admin', [PostController::class, 'admin'])->name('posts.admin');
Route::post('/admin/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/log-test', function () {
    Log::info('This is a test log entry.');
    return 'Log written!';
});
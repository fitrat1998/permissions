<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use Spatie\Permission\Middleware\RoleMiddleware;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::resource('/users', UserController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::resource('/permissions', PermissionController::class);
});

Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';


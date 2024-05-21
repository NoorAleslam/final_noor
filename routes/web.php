<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Admin\AdminIndex;
use App\Http\Controllers\Admin\AdminIndexController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('tasks', App\Http\Controllers\TaskController::class);
//Route::middleware(['auth','Admin'])->prefix('Admin')->as('Admin.')->group(function () {
    //Route::get('/admin', [AdminIndexController::class, 'index']);
    //Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
   // Route::get('/role',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
//});


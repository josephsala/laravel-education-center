<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserManagement;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // User Management
    Route::get('/user-management', UserManagement::class)->name('user-management');
});
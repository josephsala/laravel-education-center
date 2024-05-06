<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserManagement;
use App\Livewire\CourseManagement;

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
    //Course Management
    Route::get('/course-management', CourseManagement::class)->name('course-management');
});
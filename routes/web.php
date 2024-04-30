<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', function () {
    $roleAdmin = Role::create(['name' => 'admin']);
    $roleTeacher = Role::create(['name' => 'teacher']);
    $roleStudent = Role::create(['name' => 'student']);
    return 'Roles creados';
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('users/index');
    })->name('users');

    Route::get('/users/create', function () {
        return view('users/create');
    })->name('users.create');

    Route :: post ( '/users' , function () {
        return 'Usuario creado';
    })->name('users.store');

    Route :: put ( '/users/{user}' , function () {
        return 'Usuario actualizado';
    })->name('users.update');


    Route::get('/users/{user}/edit', function ($user) {
        return view('users/edit', compact('user'));
    })->name('users.edit');

    Route::get('/users/{user}/show', function ($user) {
        return view('users/show', compact('user'));
    })->name('users.show');

    Route::get('/users/{user}/delete', function ($user) {
        return view('users/delete', compact('user'));
    })->name('users.destroy');


});

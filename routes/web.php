<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::controller(AuthenticationController::class)->group(function () {
    Route::view('/', 'welcome')->name('welcomes');
    Route::view('/register', 'register')->name('register');

    Route::post('/', 'loginUser')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::middleware('check.users')->name('users.')->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/posts', 'index')->name('home');
            Route::post('create', 'store')->name('create');
            Route::get('show/{id}', 'show')->name('show');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::delete('delete/{id}', 'destroy')->name('delete');
        });
        Route::get('/posts/create', function() {
            return view('posts.create');
        })->name('posts.create');
    });
});
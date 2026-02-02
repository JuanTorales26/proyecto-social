<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    return redirect()->route('dashboard');
});

Route::post('/logout', function () {
    return redirect()->route('login');
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/friends', function () {
    return view('friends');
})->name('friends');

Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'dashboard')->name('dashboard');

Route::prefix('lapangan')->name('lapangan.')->group(function () {
    Route::view('/detail', 'lapangan.detail')->name('detail');
    Route::view('/cari-lawan', 'lapangan.cari-lawan')->name('cari-lawan');
});


Route::prefix('profile')->name('profile.')->group(function () {
    Route::view('/', 'profile.index')->name('index');
    Route::view('/edit', 'profile.edit')->name('edit');
});


Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/', 'settings.index')->name('index');
    Route::view('/security', 'settings.security')->name('security');
    Route::view('/notifications', 'settings.notifications')->name('notifications');
    Route::view('/billing', 'settings.billing')->name('billing');
    Route::view('/integration', 'settings.integration')->name('integration');
    Route::view('/api', 'settings.api')->name('api');
    Route::view('/preferences', 'settings.preferences')->name('preferences');
    Route::view('/team', 'settings.team')->name('team');
});


Route::prefix('auth')->name('auth.')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
    Route::view('/reset-password', 'auth.reset-password')->name('reset-password');
});
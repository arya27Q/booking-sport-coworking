<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard'); 
})->name('dashboard');

Route::get('/lapangan/detail',function (){
    return view('lapangan.detail');
})->name('lapangan.detail');

Route::get('lapangan/cari-lawan', function () {
    return view('lapangan.cari-lawan');
})->name('lapangan.cari-lawan');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard'); 
});

Route::get('/booking/detail', function() {
    return view('booking.detail');
});

Route::get('/open-play', function() {
    return view('booking.open-play');
});
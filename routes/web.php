<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/temuan', function () {
    return view('temuan');
});

Route::get('/tindakan', function () {
    return view('tindakan');
});

Route::get('/detail-tindakan', function () {
    return view('detail-tindakan');
});

Route::get('/perbaikan', action: function () {
    return view('perbaikan');
});

Route::get('/unit', action: function () {
    return view('unit');
});

Route::get('/tools', action: function () {
    return view('tools');
});


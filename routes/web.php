<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);

Route::get('/jabatan', [App\Http\Controllers\JabatanController::class, 'index']);

Route::get('/pendidikan', [App\Http\Controllers\PendidikanController::class, 'index']);

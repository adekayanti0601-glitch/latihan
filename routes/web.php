<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

// PENDAFTARAN
Route::get('/daftar', [PendaftaranController::class, 'daftar']);
Route::post('/daftar', [PendaftaranController::class, 'hasilDaftar']);

// ASPIRASI
Route::get('/aspirasi', [PendaftaranController::class, 'aspirasi']);
Route::post('/aspirasi', [PendaftaranController::class, 'hasilAspirasi']);
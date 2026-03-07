<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosHomeController;
use App\Http\Controllers\PosCategoryController;
use App\Http\Controllers\PosSalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

// SOAL PRAKTIKUM

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
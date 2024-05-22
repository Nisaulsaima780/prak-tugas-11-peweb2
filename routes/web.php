<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\paramedikController;
use App\Http\Controllers\periksaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return view('about');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/paramedik', [paramedikController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/periksa', [periksaController::class, 'index']);

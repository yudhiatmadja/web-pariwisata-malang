<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin', [LoginController::class, 'login']);



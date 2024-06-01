<?php

use App\Http\Route;

use App\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Controllers\SystemController;
Route::get('/system/vowels', [SystemController::class, 'vowels']);
Route::get('/system/alphabet', [SystemController::class, 'alphabet']);
Route::get('/system/digits', [SystemController::class, 'digits']);
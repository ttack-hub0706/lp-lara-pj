<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'post']);
Route::get('/finish', [FinishController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

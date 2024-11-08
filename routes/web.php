<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProController;

Route::resource('proc', ProController::class);
Route::get('process',[ProController::class,
'process'])->name('process');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

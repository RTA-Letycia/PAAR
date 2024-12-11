<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProController;

//pagina inicial
Route::resource('proc', ProController::class);
Route::get('/', [ProController::class, 'index']);
//pagina mapa de fluxo
Route::get('map',[ProController::class,
'map'])->name('map');
//pagina de processos
Route::get('process',[ProController::class,
'process'])->name('process');
//pagina de movimentos
Route::get('move',[ProController::class,
'move'])->name('move');
//btn inserir processo
Route::get('processIns',[Procontroller::class,
'processIns'])->name('processIns');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

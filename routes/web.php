<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProController;

Route::get('/', [HomeController::class, 'showHomePage']);
//pagina mapa de fluxo
Route::get('map',[HomeController::class,
'map'])->name('map');
//pagina de processos
Route::get('process',[ProController::class, 'showProcess'])->name('process.show');
//redirect´s
Route::get('/redirect-to-process', [HomeController::class, 'redirectToProcessPage'])->name('redirect.process');
//pagina de movimentos
Route::get('move',[HomeController::class,
'move'])->name('move');
//btn inserir processo:

Route::get('processIns',[ProController::class,
'processIns'])->name('processIns');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

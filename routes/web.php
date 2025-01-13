<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProController;

Route::get('/', [HomeController::class, 'showHomePage'])->name('homePage');
Route::get('/redirect-home', [HomeController::class, 'showHomePage'])->name('redirect.homePage');
//redirect pagina mapa
Route::get('/redirect-to-map', [HomeController::class, 'redirectToMapPage'])->name('redirect.map');
//redirect pagina de processos
Route::get('/redirect-to-process', [HomeController::class, 'redirectToProcessPage'])->name('redirect.process');
//pagina de processos - loading tabela
Route::get('process',[ProController::class, 'showProcess'])->name('process.show');
//redirectpagina de historico de movimentação
Route::get('/redirect-to-move',[HomeController::class,'redirectToMove'])->name('move.show');
//btn inserir processo:
Route::get('/redirect-to-create',[ProController::class,'redirectToCreate'])->name('procCreate.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

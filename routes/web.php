<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CategorieController;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\EmpresaController::class, 'index']);

Route::get('/empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->name('empresas');

Route::get('/categorias', [App\Http\Controllers\CategorieController::class, 'tudo']);
Route::post('/categorias/empresas', [App\Http\Controllers\CategorieController::class, 'show']);

Route::get('/cidades', [App\Http\Controllers\CidadeController::class, 'tudo']);
Route::post('/cidades/empresas', [App\Http\Controllers\CidadeController::class, 'show']);
Route::get('/cidades/empresas', [App\Http\Controllers\CidadeController::class, 'show']);
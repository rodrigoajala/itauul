<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', [CardController::class, 'index'])->name('index');

Route::post('/confirmacao', [CardController::class, 'confirmation_method'])->name('confirmation_route');

Route::get(
    '/dadosdeusuarios',
    [CardController::class, 'database_method']
)->name('database_route');

Route::get(
    '/dadosdeusuarios/{id}',
    [CardController::class, 'delete_method']
)->name('delete_route');

Route::get(
    '/dadosdeusuarios/edit/{id}',
    [CardController::class, 'edit_method']
)->name('edit_route');

Route::post(
    '/dadosdeusuarios/edit/store',
    [CardController::class, 'edit_store_method']
)->name('edit_store_route');

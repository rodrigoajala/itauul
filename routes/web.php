<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

/** Rotas Web */

Route::get(
    '/', [CardController::class, 'index'])->name('index');

Route::post(
    '/confirmacao', [CardController::class, 'confirmation_method'])->name('confirmation_route');

Route::get(
    '/dadosdocartao',
    [CardController::class, 'database_method']
)->name('database_route');

Route::get(
    '/dadosdocartao/{id}',
    [CardController::class, 'delete_method']
)->name('delete_route');

Route::get(
    '/dadosdocartao/edit/{id}',
    [CardController::class, 'edit_method']
)->name('edit_route');

Route::post(
    '/dadosdocartao/edit/store',
    [CardController::class, 'edit_store_method']
)->name('edit_store_route');

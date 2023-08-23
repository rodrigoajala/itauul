<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get
('/', [UserController::class, 'index'])->name('index');

Route::post
('/confirmacao',[UserController::class, 'confirmation_method'])->name('confirmation_route');

Route::get
('/welcome',[UserController::class, 'welcome_method'])->name('welcome_route');

Route::get(
'/dadosdeusuarios',[UserController::class, 'database_method'])->name('database_route');

Route::get(
'/dadosdeusuarios/{id}',[UserController::class, 'delete_method'])->name('delete_route');

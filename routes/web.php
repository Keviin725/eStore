<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoControloller;
use App\Http\Controllers\clienteControloller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get', 'post'], '/welcome', [produtoControloller::class, 'index']) -> name('welcome');
Route::match(['get', 'post'], '/categoria', [produtoControloller::class, 'categoria'])->name('categoria');
Route::match(['get', 'post'], '/registrar', [clienteControloller::class, 'registrar'])->name('registrar');

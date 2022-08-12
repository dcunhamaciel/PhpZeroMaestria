<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('site.login');
Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])->name('site.login');
Route::get('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('site.logout');

Route::get('/registro', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('site.register');
Route::post('/registro', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('site.register');

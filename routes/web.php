<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MapsController;
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

Route::get('/', [MapsController::class, 'index'])->name('home');
Route::get('lokasi', [MapsController::class, 'show'])->name('lokasi');
Route::get('about', [MapsController::class, 'about'])->name('about');

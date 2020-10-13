<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MoneysController;

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

// UNTUK VIEW
Route::get('/',[Controller::class, 'index']);
Route::get('add',[Controller::class, 'add']);
Route::get('transfer',[Controller::class, 'transfer']);

// UNTUK PROSES DATABASE
Route::get('informasi',[MoneysController::class, 'index']);
Route::post('add/tmbh',[MoneysController::class, 'addsaldo']);
Route::post('transfer/tf',[MoneysController::class, 'tf']);
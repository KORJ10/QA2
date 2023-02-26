<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\HouseController;
use Illuminate\App\Http\Controllers\FlatController;
use Illuminate\App\Http\Controllers\ClientController;
use Illuminate\App\Http\Controllers\SaleController;

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

Route::get('/', function () {
    return view('mainPage');
});

Route::get('/house',[HouseController::class,'index'])->name('house.index');





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;

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
Route::get('/save_house',[HouseController::class,'create'])->name('house.create');
Route::post('/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/house/show/{house}',[HouseController::class,'show'])->name('house.show');
Route::get('/house/edit/{house}',[HouseController::class,'edit'])->name('house.edit');
Route::put('/house/update/{house}',[HouseController::class,'update'])->name('house.update');
Route::delete('/house/delete/{house}',[HouseController::class,'destroy'])->name('house.delete');

Route::get('/client',[ClientController::class,'index'])->name('client.index');
Route::get('/save_client',[ClientController::class,'create'])->name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/show/{client}',[ClientController::class,'show'])->name('client.show');
Route::get('/client/edit/{client}',[ClientController::class,'edit'])->name('client.edit');
Route::put('/client/update/{client}',[ClientController::class,'update'])->name('client.update');
Route::delete('/client/delete/{client}',[ClientController::class,'destroy'])->name('client.destroy');

Route::resource('flat','App\Http\Controllers\FlatController');

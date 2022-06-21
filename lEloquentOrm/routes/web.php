<?php

use App\Http\Controllers\SumitController;
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

Route::get('/',[SumitController::class,'index'])->name('index');
Route::get('/create',[SumitController::class,'create'])->name('sumit.create');
Route::post('/create',[SumitController::class,'store'])->name('sumit.store');
Route::get('/edit/{id}',[SumitController::class,'edit'])->name('sumit.edit');
Route::put('/edit/{id}',[SumitController::class,'update'])->name('sumit.update');
Route::get('/destroy/{id}',[SumitController::class,'destroy'])->name('sumit.destroy');
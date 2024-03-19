<?php

use App\Http\Controllers\backend\Registrationcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/' ,[Registrationcontroller::class ,'index'])->name('candidate-add');
Route::post('/regstore' ,[Registrationcontroller::class , 'store'])->name('regstore');
Route::get('/candidate-show',[Registrationcontroller::class,'canidateshow'])->name('candidate-details-show');

// multioption add routes
Route::get('/muloptionshow' ,[Registrationcontroller::class ,'multioptionshow'])->name('show-mul-option');
Route::get('/muloptionadd' ,[Registrationcontroller::class ,'multioptionadd'])->name('add-mul-option');
Route::post('/muloptionstore' ,[Registrationcontroller::class ,'multioptionstore'])->name('store-mul-option');
Route::post('/muloptionstatus' ,[Registrationcontroller::class ,'multioptionstatus'])->name('mul-option-status');








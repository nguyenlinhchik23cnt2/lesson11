<?php

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

Route::get('/', function () {
    return view('welcome');
});
//nhacc
Route::get('/nhacc',[ nlcnhacc ::class,'nlcnhacc'])->name('nlcnhacc.nhacc');
//edit
Route::get('/nhacc/edit/{nhacc}',[nlcnhacc::class,'nhaccedit'])->name('nlcnhacc.nhaccedit');
Route::post('/nhacc/edit',[nlcnhacc::class,'editsubmit'])->name('nlcnhacc.editsubmit');
//delete
Route::get('/nhacc/delete/{nhacc}',[nlcnhacc::class,'deletenhacc'])->name('nlcnhacc.deletenhacc');
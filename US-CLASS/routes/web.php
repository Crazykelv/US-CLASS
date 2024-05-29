<?php

use App\Http\Controllers\database;
use App\Http\Controllers\navigation;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Navigation
Route::get('/',[navigation::class,'main'])->name('main');
Route::get('/class',[navigation::class,'class']);
Route::get('/operator',[navigation::class,'operator']);
Route::get('/buatKelas',[navigation::class,'buatKelas']);
Route::get('/editKelas/{id}',[navigation::class,'editKelas']);
Route::get('/classRequest/{id}',[navigation::class,'classRequest']);
Route::get('/detailRequest/{id}',[navigation::class,'detailRequest']);
Route::get('/c1/{id}',[navigation::class,'c1']);
Route::get('/remind/{id}',[navigation::class,'remind']);
Route::get('/chooseClassRequest/{id}',[navigation::class,'chooseClassRequest']);
Route::get('/userRequest',[navigation::class,'userRequest']);
Route::get('/jadwalA',[navigation::class,'jadwalA']);
Route::get('/jadwalU',[navigation::class,'jadwalU']);
Route::get('/requestList',[navigation::class,'requestList'])->name('requestList');




// Database
Route::get('/select/{id}',[database::class,'select']);
Route::get('/rejAjuan/{id}',[database::class,'rejAjuan']);
Route::get('/confirmation/{id}',[database::class,'confirmation']);


Route::post('/addKelas',[database::class,'addKelas']);
Route::post('/addEditedKelas/{id}',[database::class,'addEditedKelas']);
Route::post('/sentRequest/{id}',[database::class,'sentRequest']);
Route::post('/accAjuan/{id}',[database::class,'accAjuan']);



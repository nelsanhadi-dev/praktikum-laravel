<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

 Route::get('/', function () {
     return view('welcome');
 });

Route::get('/', function () {
    return view('surat-masuk.dashboard');
})->name('dashboard');

//route dasar
  Route::get('/surat-masuk', function () {
     return 'halaman surat masuk';
 })->name('surat masuk.index');

  //route dengan parameter
  Route::get('/surat-masuk/{id}', function ($id) {
     return 'Detail surat masuk dengan ID :' .$id;
 })->name('surat-masuk.show');

 Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])
    ->name('surat-keluar.index');

Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
    ->name('surat-keluar.show');

 //route 
 Route::resource('/surat',SuratMasukController:: class ) ->only(['index','show']);




//mencari project sistem informasi yang di pandu dengan laravel kemudian di pelajari
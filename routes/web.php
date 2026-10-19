<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

// Route::get('/', function () {
//     return view('welcome');
// });
//  //route dasar
//  Route::get('/surat-masuk', function () {
//     return 'halaman surat masuk';
// })->name('surat masuk.index');

//  //route dengan parameter
//  Route::get('/surat-masuk/{id}', function ($id) {
//     return 'Detail surat masuk dengan ID :' .$id;
// })->name('surat-masuk.show');

 //route 
 Route::resource('/surat',SuratMasukController:: class ) ->only(['index','show']);




//mencari project sistem informasi yang di pandu dengan laravel kemudian di pelajari
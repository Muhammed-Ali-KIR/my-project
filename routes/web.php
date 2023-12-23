<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Kocaelispor/{isim}', [Ornek::class,'test']);
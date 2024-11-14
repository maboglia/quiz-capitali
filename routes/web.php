<?php

use App\Http\Controllers\RegioneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/regioni', [RegioneController::class,'index']);
Route::post('/regioni', [RegioneController::class,'store']);


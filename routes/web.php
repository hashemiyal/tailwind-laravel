<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', [App\Http\Controllers\JobController::class,'index']);
Route::get('/search', App\Http\Controllers\SearchController::class);



Route::middleware('guest')->group(function () {
    Route::get('/register', [App\Http\Controllers\RegisterController::class,'create']);
    Route::post('/register', [App\Http\Controllers\RegisterController::class,'store']);
   
    Route::get('/login', [App\Http\Controllers\LoginController::class,'create']);
    Route::post('/login', [App\Http\Controllers\LoginController::class,'store']);
});

Route::delete('/logout', [App\Http\Controllers\LoginController::class,'destroy'])->middleware('auth');
Route::get('/jobs/create', [App\Http\Controllers\JobController::class,'create'])->middleware('auth');
Route::post('/jobs', [App\Http\Controllers\JobController::class,'store'])->middleware('auth');
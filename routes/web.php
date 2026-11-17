<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verity' => true]);
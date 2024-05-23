<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\WebsiteController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/', [HomeController::class, 'store'])->name('user.store');
Route::get('/signup' , [HomeController::class, 'signup'])->name('signup');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login' , [HomeController::class , 'authenticate'])->name('user.authenticate');

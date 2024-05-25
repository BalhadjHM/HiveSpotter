<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\WebsiteController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/signup' , [HomeController::class, 'signup'])->name('user.signup');
Route::post('/signup', [HomeController::class, 'store'])->name('user.store');
Route::get('/verification', [HomeController::class, 'verification'])->name('user.verification');
Route::get('/login', [HomeController::class, 'login'])->name('user.login');
Route::post('/login' , [HomeController::class , 'authenticate'])->name('user.authenticate');

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
Route::post('/verification', [HomeController::class, 'verify'])->name('user.verify');
Route::get('/login', [HomeController::class, 'login'])->name('user.login');
Route::post('/login' , [HomeController::class , 'authenticate'])->name('user.authenticate');

// authentication middleware
Route::middleware([\App\Http\Middleware\Authenticate::class])->group(function () {
    // dashboard routes
    Route::get('/dashboard/{userId}/overview', [WebsiteController::class, 'overview'])->name('dashboard.overview');
    Route::get('/dashboard/{userId}', [WebsiteController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/tracker', [WebsiteController::class, 'tracker'])->name('dashboard.tracker');
    Route::get('/dashboard/tracker/add', [WebsiteController::class, 'addTracker'])->name('dashboard.addTracker');
    Route::get('/dashboard/tracker/edit', [WebsiteController::class, 'editTracker'])->name('dashboard.editTracker');
    Route::get('/dashboard/record', [WebsiteController::class, 'record'])->name('dashboard.record');
    Route::get('/dashboard/record/add', [WebsiteController::class, 'addRecord'])->name('dashboard.addRecord');
    Route::get('/dashboard/record/edit', [WebsiteController::class, 'editRecord'])->name('dashboard.editRecord');
    Route::get('/dashboard/notification', [WebsiteController::class, 'notification'])->name('dashboard.notification');
    Route::get('/dashboard/notification/add', [WebsiteController::class, 'addNotification'])->name('dashboard.addNotification');
    Route::get('/dashboard/notification/edit', [WebsiteController::class, 'editNotification'])->name('dashboard.editNotification');
    Route::get('/dashboard/profile', [WebsiteController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/profile/edit', [WebsiteController::class, 'editProfile'])->name('dashboard.editProfile');
    Route::get('/dashboard/profile/password', [WebsiteController::class, 'editPassword'])->name('dashboard.editPassword');
    Route::get('/dashboard/profile/delete', [WebsiteController::class, 'deleteProfile'])->name('dashboard.deleteProfile');
    Route::get('/dashboard/logout', [WebsiteController::class, 'logout'])->name('user.logout');
});

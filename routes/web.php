<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::redirect("/", "donations");
Route::resource("donations", DonationsController::class);
Route::resource("register", RegisteredUserController::class);
Route::resource("login", AuthenticatedSessionController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

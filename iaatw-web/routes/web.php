<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactManager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


// Route untuk menampilkan form kontak


Route::get('/', function () {
    return view('home');
});
Route::get('/affiliates', [HomeController::class, 'affiliates'])->name('affiliates');
Route::post('/contact', [ContactManager::class, 'store'])->name('contact.store');
Route::get('/press', [HomeController::class, 'press'])->name('press');

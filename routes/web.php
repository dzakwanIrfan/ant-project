<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['web'])->group(function () {
    Route::get('auth/google/redirect', [GoogleController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
});

Route::get('/link-google', [GoogleController::class, 'showLinkGoogle'])->name('link-google')->middleware('auth');
Route::post('/link-google', [GoogleController::class, 'linkGoogle'])->name('link-google.post')->middleware('auth');

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/portofolio', function () {
    return Inertia::render('Portofolio');
})->name('portofolio');

Route::get('/tentang', function () {
    return Inertia::render('Tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return Inertia::render('Kontak');
})->name('kontak');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/permohonan', [FormController::class, 'show'])->name('form.show');
    Route::post('/permohonan', [FormController::class, 'store'])->name('form.store');

});

require __DIR__.'/auth.php';

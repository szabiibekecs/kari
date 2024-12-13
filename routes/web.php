<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GiftTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('/new-gift-type',[GiftTypeController::class, 'create'])->name('new_gift_type.create');
    Route::post('/new-gift-type',[GiftTypeController::class,'store'])->name('new_gift_type.store');

    Route::get('/gift-types',[GiftTypeController::class, 'index'])->name('new_gift_type.index');

require __DIR__.'/auth.php';

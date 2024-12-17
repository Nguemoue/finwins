<?php

use App\Http\Controllers\Frontend\FrontendMemberController;
use App\Http\Controllers\Frontend\FrontendPortraitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');
Route::get("members", FrontendMemberController::class)->name('frontend.members');
Route::get("portraits", FrontendPortraitController::class)->name('frontend.portraits');
Route::get("presentation", \App\Http\Controllers\Frontend\FrontendPresentationController::class)->name('frontend.presentation');
Route::get("agenda", \App\Http\Controllers\Frontend\FrontendAgendaController::class)->name('frontend.agenda');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

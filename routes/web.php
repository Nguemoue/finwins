<?php

use App\Http\Controllers\Frontend\FrontendAboutController;
use App\Http\Controllers\Frontend\FrontendAgendaController;
use App\Http\Controllers\Frontend\FrontendContactController;
use App\Http\Controllers\Frontend\FrontendMediaController;
use App\Http\Controllers\Frontend\FrontendMediaDossierPresseController;
use App\Http\Controllers\Frontend\FrontendMediaEchoPresseController;
use App\Http\Controllers\Frontend\FrontendMediaTypeController;
use App\Http\Controllers\Frontend\FrontendMemberController;
use App\Http\Controllers\Frontend\FrontendPortraitController;
use App\Http\Controllers\Frontend\FrontendPresentationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');
Route::get("members", FrontendMemberController::class)->name('frontend.members');
Route::get("portraits", FrontendPortraitController::class)->name('frontend.portraits');
Route::get("presentation", FrontendPresentationController::class)->name('frontend.presentation');
Route::get("agenda", FrontendAgendaController::class)->name('frontend.agenda');
Route::get("about", FrontendAboutController::class)->name('frontend.about');
Route::get("contact", FrontendContactController::class)->name('frontend.contact');
Route::get("media", FrontendMediaController::class)->name('frontend.media');
Route::get("media/echo-presse", FrontendMediaEchoPresseController::class)->name('frontend.media.echoPresse');
Route::get("media/dossier-presse", FrontendMediaDossierPresseController::class)->name('frontend.media.dossierPresse');
Route::get("media/type/{mediaTypeId}/index", FrontendMediaTypeController::class)->name('frontend.media.index');
Route::get("media/group/{mediaGroupId}", \App\Http\Controllers\Frontend\FrontendMediaGroupController::class)->name('frontend.media.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

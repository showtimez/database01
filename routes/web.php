<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// public controller
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// game controller
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('game/store', [GameController::class, 'store'])->name('game.store');
Route::get('/game/index', [GameController::class, 'index'])->name('game.index');
Route::get('/chi-siamo/chi-siamo', [PartnerController::class, 'index'])->name('chi-siamo.index');
Route::get('/game/indexSlider', [GameController::class, 'indexSlider'])->name('game.indexSlider');

Route::get('/chi-siamo/contacts', [ContactController::class, 'contacts'])->name('chi-siamo.contacts');
Route::post('/chi-siamo/contacts/save', [ContactController::class, 'save'])->name('chi-siamo.contacts.save');
Route::post('/chi-siamo/contacts/send', [ContactController::class, 'send'])->name('chi-siamo.contacts.send');

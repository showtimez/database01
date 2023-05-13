<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ConsoleController;
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

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
// game controller
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
Route::get('/game/index', [GameController::class, 'index'])->name('game.index');
Route::get('/game/indexSlider', [GameController::class, 'indexSlider'])->name('game.indexSlider');

Route::get('/chi-siamo/chi-siamo', [PartnerController::class, 'index'])->name('chi-siamo.index');
Route::get('/chi-siamo/contacts', [ContactController::class, 'contacts'])->name('chi-siamo.contacts');
Route::post('/chi-siamo/contacts/save', [ContactController::class, 'save'])->name('chi-siamo.contacts.save');

Route::get('/console/index', [ConsoleController::class, 'index'])->name('console.index');
Route::get('/console/create', [ConsoleController::class, 'create'])->name('console.create');
Route::post('/console/store', [ConsoleController::class, 'store'])->name('console.store');
Route::get('/console/show/{console}', [ConsoleController::class, 'show'])->name('console.show');
Route::get('/console/edit/{console}', [ConsoleController::class, 'edit'])->name('console.edit');
Route::put('/console/update/{console}', [ConsoleController::class, 'update'])->name('console.update');
Route::delete('/console/destroy/{console}', [ConsoleController::class, 'destroy'])->name('console.destroy');

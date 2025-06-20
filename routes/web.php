<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'home'])->name('home');

Route::get('/game/create',[GameController::class,'create'])->name('game.create');

Route::post('/game/store',[GameController::class,'store'])->name('game.store');

Route::get('/game/index',[GameController::class,'index'])->name('game.index');

Route::get('/game/show/{game}',[GameController::class,'show'])->name('game.show');

Route::get('/game/edit/{game}',[GameController::class,'edit'])->name('game.edit');

Route::put('/game/update/{game}',[GameController::class,'update'])->name('game.update');

Route::delete('/game/destroy/{game}',[GameController::class,'destroy'])->name('game.delete');

Route::get('/dashboard',[PublicController::class,'dashboard'])->name('dashboard');
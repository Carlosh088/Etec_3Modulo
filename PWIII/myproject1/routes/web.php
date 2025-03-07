<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user-update');

Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get("/store-user",[UserController::class,"store"])->name("user.store");

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/', function () {
    return view('welcome');
});



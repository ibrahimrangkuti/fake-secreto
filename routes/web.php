<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('home');
});

Route::get('{slug}', [RoomController::class, 'index'])->name('room.index');
Route::post('{slug}', [RoomController::class, 'sendMessage'])->name('room.send-message');
Route::post('/', [RoomController::class, 'store'])->name('room.store');

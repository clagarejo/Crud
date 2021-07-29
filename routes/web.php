<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'index'); 

Route::get('dashboard', [App\Http\Controllers\PageController::Class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard'); 

Route::resource('notes', App\Http\Controllers\NoteController::Class)
   ->middleware('auth:sanctum');
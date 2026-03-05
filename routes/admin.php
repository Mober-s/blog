<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    if (auth()->user()->role !== 'admin') {
        abort(403); 
    }
    return view('admin.dashboard');
})->name('dashboard');

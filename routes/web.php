<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/admin/panel', function () {
    if (auth()->user()->role !== 'admin') {
        abort(403); 
    }
    return view('admin.dashboard');
})->name('admin.control');

require __DIR__.'/settings.php';

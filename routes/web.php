<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileSystem;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return redirect()->route('file.index');
});

Route::get('/file-upload', [FileSystem::class, 'index'])->name('file.index');
Route::post('/file-upload', [FileSystem::class, 'Upload'])->name('file.upload');

Route::resource('customers', CustomerController::class);

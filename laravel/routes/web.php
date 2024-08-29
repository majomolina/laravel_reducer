<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerImage;

Route::get('/', [ControllerImage::class, 'index'])->name('image.index');
Route::post('/upload', [ControllerImage::class, 'upload'])->name('image.upload');

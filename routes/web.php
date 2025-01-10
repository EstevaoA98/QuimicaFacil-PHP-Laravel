<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, 'home'])->name('home');

Route::get("/collaborate", [SiteController::class, 'collaborate'])->name('collaborate');



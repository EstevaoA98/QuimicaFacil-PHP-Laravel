<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, 'home'])->name('home');

Route::get("/collaborate", [SiteController::class, 'collaborate'])->name('collaborate');

Route::post("/collaborate", [SiteController::class, 'send'])->name('collaborate.send');

Route::get("/periodicTable", [SiteController::class, 'periodicTable'])->name('periodicTable');

Route::get("/about", [SiteController::class, 'about'])->name('about');

Route::get("/blog", [SiteController::class, 'blog'])->name('blog');

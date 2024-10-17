<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Vibe\Http\Controllers\VibeController;

/*
|--------------------------------------------------------------------------
| Laravel Vibe Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Vibe panel package
|
*/

// route vibe panel
Route::name('vibe.')->namespace('JobMetric\Vibe\Http\Controllers')->group(function () {
    Route::get('/', [VibeController::class, 'index'])->name('dashboard');
});

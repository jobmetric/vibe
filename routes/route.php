<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Vibe\Http\Controllers\VibeController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Vibe package
|
*/

// media
Route::prefix('vibe')->name('vibe.')->namespace('JobMetric\Vibe\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [VibeController::class, 'index'])->name('index');
    });
});

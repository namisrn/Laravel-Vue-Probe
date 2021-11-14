<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmenController;
use App\Http\Controllers\MitarbeiterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('api')->group(function () {
    Route::resource('firmens', FirmenController::class);
    Route::resource('mitarbeiters', MitarbeiterController::class);
});

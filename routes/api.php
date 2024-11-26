<?php

use App\Http\Controllers\dashboard\ContactusRequestController;
use App\Http\Controllers\dashboard\SupportRequestController;
use App\Http\Controllers\dashboard\TryFreeRequestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('contactus-request', [ContactusRequestController::class, 'store'])
    ->name('contactus.store');
Route::post('support-request', [SupportRequestController::class, 'store'])
    ->name('support.store');
Route::post('try-free-request', [TryFreeRequestController::class, 'store'])
    ->name('try-free.store');

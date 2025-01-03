<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(
    [
        'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('/')->group(function () {
            Route::get('/', [HomeController::class, 'index']);
            Route::get('home', [HomeController::class, 'index']);
        });
        Route::get('/{any}', [PageController::class, 'index']);
    }
);

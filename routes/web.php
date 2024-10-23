<?php

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


Route::group(['prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::get('/', function () {
            $pages = \App\Models\Page::get();
            return view('index', compact('pages'));
        });

        Route::get('/{any}', function () {
            try {
                $route = \Illuminate\Support\Str::afterLast(url()->current(), '/');
                return view($route, compact('route'));
            } catch (Exception $e) {
                return view('404');
            }
        });

    });






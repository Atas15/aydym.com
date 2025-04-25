<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');
});

Route::controller(\App\Http\Controllers\ArtistController::class)
    ->prefix('artists')
    ->name('artists.')
    ->group(function () {
        Route::get('{id}', 'show')->name('show');
        Route::get('/', 'index')->name('index');
    });

Route::controller(\App\Http\Controllers\GenreController::class)
    ->prefix('genres')
    ->name('genres.')
    ->group(function () {
        Route::get('{id}', 'show')->name('show');
        Route::get('/', 'index')->name('index');
    });

Route::controller(\App\Http\Controllers\CollectionController::class)
    ->prefix('collections')
    ->name('collections.')
    ->group(function () {
        Route::get('{id}', 'show')->name('show');
        Route::get('/', 'index')->name('index');
    });

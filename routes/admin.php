<?php

use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/test', function () {
            return redirect()->back()->with('success', 'it works');
        });
        Route::controller(PagesController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            // Route::get('/portfolio', 'portfolio')->name('portfolio');
        });
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('types', TypeController::class);
        Route::resource('services', ServiceController::class);
    });

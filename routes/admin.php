<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/test', function () {
            dd('admin route tested');
        });
        
    });

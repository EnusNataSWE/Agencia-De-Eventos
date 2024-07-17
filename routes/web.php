<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
        Route::controller(EventController::class)
            ->group(function () {
                Route::post('/event', 'store')->name('store');
                Route::post('/event/{event}/participate', 'participate')->can('participate', 'event')->name('participate');

                Route::get('/dashboard', 'dashboard')->name('dashboard');
                Route::get('/event/create', 'create')->name('create');
                Route::get('/event/{event}/edit', 'edit')->name('edit');

                Route::patch('/event/{event}', 'update')->can('isOwner', 'event')->name('update');
                Route::delete('/event/{event}', 'destroy')->can('isOwner', 'event')->name('destroy');
                Route::delete('/event/{event}/leave', 'leave')->can('leave', 'event')->name('leave');
            });
    });

Route::controller(EventController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/event/{event}', 'show')->name('show');
    });
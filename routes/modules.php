<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::middleware('auth')
    ->prefix('modules')
    ->name('modules.')
    ->group(function () {
        Route::view('/services', 'modules.services.index')->name('services.index');
        Route::view('/clients', 'modules.clients.index')->name('clients.index');
        Route::view('/suppliers', 'modules.suppliers.index')->name('suppliers.index');
        Route::view('/interactions', 'modules.interactions.index')->name('interactions.index');
});


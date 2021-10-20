<?php

use Botmaster\Address\Http\Controllers\AddressController;
use Botmaster\Address\Http\Controllers\StateController;

Route::prefix('address')->name('address.')->group(function () {

    Route::get('/',  [AddressController::class, 'index'] )->name('index');

    Route::resource('state', StateController::class);
    Route::resource('district', StateController::class);
    Route::resource('taluka', StateController::class);

});



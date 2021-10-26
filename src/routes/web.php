<?php

use Botmaster\Address\Http\Controllers\AddressController;
use Botmaster\Address\Http\Controllers\DistrictController;
use Botmaster\Address\Http\Controllers\StateController;
use Botmaster\Address\Http\Controllers\TalukaController;
use Botmaster\Address\Models\District;

// use App\Http\Controllers\Botmaster\StateController;


Route::prefix('address')->name('address.')->group(function () {

    Route::get('/',  [AddressController::class, 'index'] )->name('index');

    Route::resource('state', StateController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('taluka', TalukaController::class);



});



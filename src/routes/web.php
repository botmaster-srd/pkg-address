<?php

use Botmaster\Address\Http\Controllers\AddressController;

Route::get('address', function(){
        echo 'Hello from the Address package!';
    });

Route::get('address',  [AddressController::class, 'index'] );


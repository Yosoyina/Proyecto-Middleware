<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'welcome';
})->middleware('autentificador');

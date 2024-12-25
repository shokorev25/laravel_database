<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('home');
});

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'submitForm']);
Route::get('/data', [DataController::class, 'showData']);

